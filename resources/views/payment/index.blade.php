@extends('layouts.app')
@section('content')
<div class="container" >
    
    <div class="row justify-content-center"  style="padding-top: 95px; padding-left: 20px;">
        <div style="padding-left: 200px;"class="card-header bg-primary text-light d-flex">
            <h4 class="mb-0 text-right" >Package Amount</h4>
            <a href="{{route ('payment.create') }}" style="color: seashell; float: right;">Set Payment</a>
        </div>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
                <div class="card-body">
                    <table class="table ml-5">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Parent Name</th>
                                <th>Manager Name</th>
                                <th>Package Name</th>
                                <th>Transaction Id</th>
                                <th>Paid Amount</th>
                                <th>Due Amount</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if($payments->count()>0)
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{App\Models\User::where('id',$payment->parent_id)->first()->name}}</td>
                                    <td>{{App\Models\User::where('id',$payment->manager_id)->first()->name}}</td>
                                    <td>{{App\Models\Package::where('id',$payment->package_id)->first()->packageClass}}</td>
                                    <td>{{$payment->transaction_id}}</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>{{$payment->due_amount}}</td>
                                    {{-- <td class="d-inline-flex">
                                        <a href="{{ route('payment.edit',['id' =>$payment->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('payment.destroy',['id' =>$payment->id]) }}" method="post" class="ml-2">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $payment->id }}">
                                        <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    </td> --}}
                                </tr>
                                @endforeach 
                            @else
                                <tr>
                                    <td colspan="5">
                                        <h5 class="text-center mt-3">No Information Found</h5>
                                    </td>
                                </tr>
                            @endif

                        </tbody>
                    </table>

        </div>
    </div>
</div>

@endsection