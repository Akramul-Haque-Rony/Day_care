<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{

    public function index()
    {
        $complains = complain::all();
        return view('complain.index')->with('complains', $complains);
    }

    public function create()
    {
        return view('complain.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname'=> 'required',
            'complainemail'=> 'required',
            'complain'=> 'required',
            ]);
            // dd($request->all()); 
            complain::create([
                'fullname' => $request->fullname,
                'complainemail' => $request->complainemail,
                'complain' => $request->complain,
            ]);
            $request->session()->flash('success', 'Successfully Complain!');
            return redirect()->back();
    }

}
