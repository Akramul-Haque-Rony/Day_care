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
                        <form action="{{ route('package.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">packageClass</label>
                                <input type="text" class="form-control" name="packageClass"
                                    placeholder="Enter Package Class" value="{{ old('packageClass') }}">
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
