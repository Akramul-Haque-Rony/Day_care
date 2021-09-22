@extends('layouts.app')
@section('content')
    <div class="row">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('packageprice.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="from-group col-md-5">
                                <div class="form-group">
                                    <label for="">Package Class</label>
                                    <select name="packageClass_id" class="form-control">
                                        <option value="">Select Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->packageClass }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group col-md-5">
                                <div class="form-group">
                                    <label for="">Package price</label>
                                    <input type="text" class="form-control" name="packageprice"
                                        placeholder="Enter Package price" value="{{ old('packageprice') }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
