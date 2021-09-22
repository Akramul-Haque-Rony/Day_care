<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package, $id)
    {
        $packages = package::find($id);
        return view('package.edit')->with('packages', $packages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package, $id)
    {
        $this->validate($request, [
            'packageClass' => 'required',
        ]);

        //dd($request->all());
        $packages = package::find($id);
        $packages->packageClass = $request->packageClass;
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
