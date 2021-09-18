@extends('layouts.app')
@section('content')
<div class="container"  style="padding-top: 100px; padding-left: 120px;">
    <div class="row justify-content-center" style="padding-left: 100px">
        @if(Session::has('success'))
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
                                    <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif                            
                            <form action="{{ route('employee.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Employee Name</label>
                                    <input type="text" class="form-control" name="employeename" placeholder="Enter Employee name" value="{{ old('employeename') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Employees Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Enter Employees PassWord" value="{{ old('passwords') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="role" class="form-control">
                                        <option value="employee">Employee</option>
                                        <option value="parent">Parent</option>

                                    </select>
                                    {{-- <input type="text" class="form-control" name="position" placeholder="Enter Employee Position" value="{{ old('position') }}"> --}}
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" >Submit Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection