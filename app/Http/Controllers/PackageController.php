<?php

namespace App\Http\Controllers;

use App\Models\package;
use App\Models\packageprice;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class PackageController extends Controller
{

    public function index(package $package)
    {
        // $packages = $package->orderBy("id", "ASC")->get();
        // foreach($packages as $package){
        //     $package->Price = $package->packagePrice;
        // }
        // dd($packages);
        $packages = $package->leftJoin(
            'packageprices',
            'packageprices.packageClass_id',
            'packages.id'
        )->select('packages.id', 'packages.packageClass', 'packageprices.packageprice')->get();

        return view('package.index')->with('packages', $packages);
    }

    public function forparents(package $package)
    {
        $packages = $package->leftJoin(
            'packageprices',
            'packageprices.packageClass_id',
            'packages.id'
        )->select('packages.id', 'packages.packageClass', 'packageprices.packageprice')->get();

        return view('package.forparents')->with('packages', $packages);
    }

    public function create()
    {
        return view('package.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'packageClass' => 'required|unique:packages,packageClass',
        ]);

        package::create([
            'packageClass' => $request->packageClass,
        ]);

        // Session::flash('Success','Baby Ass Successfully');
        $request->session()->flash('success', 'Package Class Add Successfully!');
        return redirect()->back();
        //dd($request->all());    
    }

    public function edit(package $package, $id)
    {
        $package = packageprice::find($id);
        return view('package.edit')->with('package', $package);
    }

    public function update(Request $request, package $package, $id)
    {
        $this->validate($request, [
            'packageprice' => 'required',
        ]);

        //dd($request->all());
        $packages = packageprice::find($id);
        $packages->packageprice = $request->packageprice;
        $packages->save();

        $request->session()->flash('success', 'Information Updated Successfully...');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, package $package)
    {
        $package = package::find($request->id);
        $package->delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
