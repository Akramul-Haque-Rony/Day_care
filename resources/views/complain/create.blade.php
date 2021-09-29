@extends('layouts.app')
@section('content')
    <div class="row">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <div class="container">
            <form action="{{ route('complain.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Your  Name..." value="{{ old('fullname') }}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="complainemail" placeholder="Enter Email" value="{{ old('complainemail') }}">
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <textarea class="form-control" name="complain" placeholder="Write something.."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" >Submit</button>
                </div>
          
            </form>
          </div>
    </div>
@endsection
