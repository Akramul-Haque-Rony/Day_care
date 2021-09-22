<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeLoginController extends Controller
{
    public function index()
    {
        return view('employee.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $role = employee::where('email', $request->email)->first()->role;
        if($role=='owner'){
            return view('home');
        }else if($role=='employee'){
            return view('employee.employee_dashboard');
        }
        }

            return view('employee.login');
        
  
       
    }
}
