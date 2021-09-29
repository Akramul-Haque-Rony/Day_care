<?php

namespace App\Http\Controllers;

use App\Models\packageprice;
use App\Models\package;
use Illuminate\Http\Request;

class PackagepriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = package::all();
        return view('packageprice.index')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['packages'] = package::all();
        return view('packageprice.create',$data);
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
        'packageClass_id'=> 'required',
        'packageprice'=> 'required',
        ]);

        packageprice::create([
            'packageClass_id' => (int)($request->packageClass_id),
            'packageprice' => $request->packageprice,
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
        return view('packageprice.edit')->with('packages', $packages);
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
            'packageClass'=> 'required',
            ]);

        //dd($request->all());
        $packages = package::find($id);
        $packages->packageClass = $request->packageClass;
        $packages -> save();

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
        $package -> delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
