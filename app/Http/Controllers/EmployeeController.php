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

    public function index()
    {
        $employees = User::where('role', 'employee')->get();
        return view('employee.index')->with('employees', $employees);
    }
    public function manager_view()
    {
        $employees = User::where('role', 'manager')->get();
        return view('employee.index')->with('employees', $employees);
    }


    public function create()
    {
        return view('employee.create');
    }

    public function create_manager()
    {
        return view('employee.create_manager');
    }

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
        $request->session()->flash('success', 'Employee Join Successfully!');
        return redirect()->back();  
}
    public function edit(employee $employee, $id)
    {
        $employee = employee::find($id);
        return view('employee.edit')->with('employee', $employee);
    }
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
    public function destroy(Request $request, employee $baby)
    {
        $employee = employee::find($request->id);
        $employee -> delete();

        $request->session()->flash('success', 'Information Deleted Successfully');
        return redirect()->back();
    }
}
