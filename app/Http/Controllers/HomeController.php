<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function employees()
    {
        return view('employees');
    }

    public function chart()
    {
        return view('charts');
    }

    public function package()
    {
        return view('package');
    }
    public function notification()
    {
        return view('notifications');
    }

    public function profile()
    {
        return view('profile');
    }

    public function payments()
    {
        return view('payments');
    }

    public function duplicate()
    {
        return view('duplicate');
    }
}
