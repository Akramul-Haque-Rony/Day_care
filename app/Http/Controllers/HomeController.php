<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $payments = Payment::orderBy('id', 'ASC')->get();
        $total_amount = 0;
        $total_due = 0;
        foreach($payments as $payment){
            $total_amount = $total_amount + $payment->amount;
            $total_due = $total_due + $payment->due_amount;
        }
        $data = [
            'total_amount' => $total_amount,
            'total_due' => $total_due,
        ];
        return view('home', compact('data'));
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
