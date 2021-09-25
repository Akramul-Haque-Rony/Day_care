@extends('layouts.app')
@section('content')
    <style>
        .btn-primary {
            float: right;
        }
    </style>
    <div class="row">
        <div class="card-header text-light d-flex">
            <h4 class="mb-0">Payment List</h4>
            <a href="{{ route('payment.create') }}" class="btn btn-primary">Receive Payment</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div>
            <table class="table">
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
                    @if ($payments->count() > 0)
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ App\Models\User::where('id', $payment->parent_id)->first()->name }}</td>
                                <td>{{ App\Models\User::where('id', $payment->manager_id)->first()->name }}</td>
                                <td>{{ App\Models\Package::where('id', $payment->package_id)->first()->packageClass }}</td>
                                <td>{{ $payment->transaction_id }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->due_amount }}</td>
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
@endsection
