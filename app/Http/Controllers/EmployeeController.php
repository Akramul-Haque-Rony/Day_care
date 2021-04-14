<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employees = employee::all();
        return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
        'employeename'=> 'required',
        'email'=> 'required',
        'position'=> 'required',
        ]);

        employee::create([
            'employeename' => $request->employeename,
            'email' => $request->email,
            'position' => $request->position,
        ]);
        
       // Session::flash('Success','Baby Ass Successfully');
        $request->session()->flash('success', 'Employee Join Successfully!');
        return redirect()->back();
    //dd($request->all());    
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        $babys = employee::all();
        return view('employee.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee, $id)
    {
        $employee = employee::find($id);
        return view('employee.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee, $id)
    {
        $this->validate($request, [
            'employeename'=> 'required',
            'email'=> 'required',
            'position'=> 'required',
            ]);

        //dd($request->all());
        $employee = employee::find($id);
        $employee->employeeName = $request->employeename;
        $employee-> email = $request->email;
        $employee-> position = $request->position;
        $employee->save();

        $request->session()->flash('success', 'Information Updated Successfully...');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, employee $baby)
    {
        $employee = employee::find($request->id);
        $employee -> delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
