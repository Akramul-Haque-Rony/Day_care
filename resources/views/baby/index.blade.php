@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table ml-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Baby Name</th>
                                <th>Parents Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($babys->count()>0)
                                @foreach ($babys as $baby)
                                <tr>
                                    <td>{{$baby ->id}}</td>
                                    <td>{{$baby ->babyname}}</td>
                                    <td>{{$baby ->parentname}}</td>
                                    <td>{{$baby ->email}}</td>
                                    <td class="d-inline-flex">
                                        <a href="{{ route('baby.edit',['id' =>$baby->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('baby.destroy',['id' =>$baby->id]) }}" method="post" class="ml-2">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <input type="hidden" name="id" value="{{ $baby->id }}">
                                        <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                                        {{-- <a href="{{ route('baby.destroy',['id' =>$baby->id]) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    </form>
                                    </td>
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
    </div>
</div>
@endsection