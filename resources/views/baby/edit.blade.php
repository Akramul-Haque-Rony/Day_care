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
                            <form action="{{ route('baby.update', ['id' => $baby->id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Baby Name</label>
                                    <input type="text" class="form-control" name="babyname" value="{{ $baby->babyname }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Parent Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $baby->email }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" >Update Baby's Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection