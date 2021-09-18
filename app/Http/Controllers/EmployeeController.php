<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $employees = User::where('role', 'employee')->get();
        
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
        'password'=> 'required',
        'role'=> 'required',
        ]);

        User::create([
            'name' => $request->employeename,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
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
            'password' => 'required',
            'role' => 'required',
            ]);

        //dd($request->all());
        $employee = employee::find($id);
        $employee->employeeName = $request->employeename;
        $employee-> email = $request->email;
        $employee-> role = $request->role;
        $employee-> password = Hash::make($request->password);
        
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
