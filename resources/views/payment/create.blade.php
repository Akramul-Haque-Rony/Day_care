@extends('layouts.app')
@section('content')
    <div class="row">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 offset-3">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('payment.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">parent Name</label>
                                    <select name="parent_id" class="form-control">
                                        @foreach ($data['parents'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Assign Package --}}
                                <div class="form-group">
                                    <label for="">Select Package</label>
                                    <select name="package_id" class="form-control">
                                        @foreach ($data['packages'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->packageClass }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Amount --}}
                                <div class="form-group">
                                    <label for="">Received Payment Amount</label>
                                    <input type="text" class="form-control" name="amount"
                                        placeholder="Enter Received Amount" value="{{ old('amount') }}">
                                </div>
                                {{-- Payment Method --}}
                                <div class="form-group">
                                    <label for="">Payment Method</label>
                                    <select name="payment_method" class="form-control">
                                        <option value="cash">Cash</option>
                                        <option value="bkash">Parent</option>
                                        <option value="rocket">Rocket</option>
                                        <option value="bank">Bank</option>
                                    </select>
                                </div>
                                {{-- Transaction Id --}}
                                <div class="form-group">
                                    <label for="">Transaction Id</label>
                                    <input type="text" class="form-control" name="transaction_id"
                                        placeholder="Enter Transection ID" value="{{ old('transaction_id') }}">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
