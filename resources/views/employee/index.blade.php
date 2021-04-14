@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 95px; padding-left: 20px;">
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
                                <th>Employee Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($employees->count()>0)
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee ->id}}</td>
                                    <td>{{$employee ->employeename}}</td>
                                    <td>{{$employee ->email}}</td>
                                    <td>{{$employee ->position}}</td>
                                    <td class="d-inline-flex">
                                        <a href="{{ route('employee.edit',['id' =>$employee->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('employee.destroy',['id' =>$employee->id]) }}" method="post" class="ml-2">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <input type="hidden" name="id" value="{{ $employee->id }}">
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