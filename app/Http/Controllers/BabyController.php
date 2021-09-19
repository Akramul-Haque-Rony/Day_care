<?php

namespace App\Http\Controllers;

use App\Models\baby;
use App\Models\employee;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babys = baby::all();
        return view('baby.index')->with('babys', $babys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->select('id', 'name')->get();
        return view('baby.create')->with('parents', $parents);
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
            'babyname' => 'required',
            'parent_id' => 'required',
            'email' => 'required',
        ]);

        baby::create([
            'babyname' => $request->babyname,
            'parent_id' => (int)($request->parent_id),
            'email' => $request->email,
        ]);

        // Session::flash('Success','Baby Ass Successfully');
        $request->session()->flash('success', 'Baby Add Successfully!');
        return redirect()->back();
        //dd($request->all());    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employees)
    {
        $employees = User::where('role', 'parent')->get();
        return view('baby.show')->with('employees', $employees);
        }
    public function edit(baby $baby, $id)
    {
        $baby = baby::find($id);
        return view('baby.edit')->with('baby', $baby);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baby $baby, $id)
    {
        $this->validate($request, [
            'babyname' => 'required',
            'parentname' => 'required',
            'email' => 'required',
        ]);

        //dd($request->all());
        $baby = baby::find($id);
        $baby->babyname = $request->name;
        $baby->parentname = $request->parentname;
        $baby->email = $request->email;
        $baby->save();

        $request->session()->flash('success', 'Information Updated Successfully...');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, baby $baby)
    {
        $baby = baby::find($request->id);
        $baby->delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
