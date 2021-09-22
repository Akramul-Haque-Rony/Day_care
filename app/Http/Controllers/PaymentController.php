<?php

namespace App\Http\Controllers;

use App\Models\package;
use App\Models\packageprice;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::orderBy('id', 'DESC')->get();
        return view('payment.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->select('id', 'name')->get();
        $packages = package::select('id', 'packageClass')->get();
        $data = [
            'parents' => $parents,
            'packages' => $packages
        ];
        return view('payment.create')->with('data', $data);
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
            'parent_id'=> 'required',
            'package_id'=> 'required',
            'amount'=> 'required',
            ]);
            $due = (packageprice::where("packageclass_id", $request->package_id)->first()->packageprice)-($request->amount);
            Payment::create([
                'parent_id' => $request->parent_id,
                'manager_id' => Auth::user()->id,
                'package_id' => $request->package_id,
                'amount' => $request->amount,
                'payment_method' => $request->payment_method,
                'transaction_id' => $request->transaction_id,
                'due_amount' => $due,
            ]);
            $request->session()->flash('success', 'Payment Receive Successfully!');
            return redirect()->back();      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
