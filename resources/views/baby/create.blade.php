@extends('layouts.app')
@section('content')
    <div class="row">
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
                            
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            <form action="{{ route('baby.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Baby Name</label>
                                    <input type="text" class="form-control" name="babyname" placeholder="Enter Baby name" value="{{ old('babyname') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">parent Name</label>
                                    <select name="parent_id" class="form-control">
                                        @foreach ($data['parents'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Parent Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Parents Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Select Package</label>
                                    <select name="package_id" class="form-control">
                                        @foreach ($data['packages'] as $item)
                                            <option value="{{ $item->id }}">{{ $item->packageClass }}</option>
                                        @endforeach
                                    </select>
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
@endsection