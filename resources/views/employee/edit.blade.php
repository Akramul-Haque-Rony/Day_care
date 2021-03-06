@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 100px; padding-left: 120px;">
    <div class="row justify-content-center">
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

                            
                            <form action="{{ route('employee.update', ['id' => $employee->id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Employee Name</label>
                                    <input type="text" class="form-control" name="employeename" value="{{ $employee->employee }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $employee->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Postion</label>
                                    <input type="text" class="form-control" name="position" value="{{ $employee->position }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" >Update employee's Data</button>
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