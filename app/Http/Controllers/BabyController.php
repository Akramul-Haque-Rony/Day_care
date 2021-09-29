<?php

namespace App\Http\Controllers;

use App\Models\baby;
use App\Models\employee;
use App\Models\package;
use App\Models\packageprice;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $babys = baby::all();
        return view('baby.index')->with('babys', $babys);
    }

    public function foremployee()
    {
        $babys = baby::all();
        return view('baby.foremployee')->with('babys', $babys);
    }

    public function create()
    {
        $parents = User::where('role', 'parent')->select('id', 'name')->get();
        $packages = package::select('id', 'packageClass')->get();
        $data = [
            'parents' => $parents,
            'packages' => $packages
        ];
        return view('baby.create')->with('data', $data);
    }

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

        // Session::flash('Success','Baby Add Successfully');
        $request->session()->flash('success', 'Baby Add Successfully!');
        return redirect()->back();
        //dd($request->all());    
    }

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

    public function update(Request $request, baby $baby, $id)
    {
        $this->validate($request, [
            'babyname' => 'required',
            'email' => 'required',
        ]);

        //dd($request->all());
        $baby = baby::find($id);
        $baby->babyname = $request->babyname;
        $baby->email = $request->email;
        $baby->save();

        $request->session()->flash('success', 'Information Updated Successfully...');
        return redirect()->back();
    }

    public function destroy(Request $request, baby $baby)
    {
        $baby = baby::find($request->id);
        $baby->delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
