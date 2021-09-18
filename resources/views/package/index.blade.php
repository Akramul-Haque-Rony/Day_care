@extends('layouts.app')
@section('content')
<div class="container" >
    
    <div class="row justify-content-center"  >
        <div class="card-header bg-primary text-light d-flex">
            <h4 class="mb-0">Package List</h4>
            <a href="{{route ('package.create') }}" style="color: seashell" class="right">Add Package</a>
        </div>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
                <div class="card-body">
                    <table class="table ml-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Package Class</th>                                
                                <th>Package Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($packages->count()>0)
                                @foreach ($packages as $package)
                                <tr>
                                    <td>{{$package ->id}}</td>
                                    <td>{{$package ->packageClass}}</td>
                                    <td>{{$package ->packageprice}}</td>
                                    <td class="d-inline-flex">
                                        <a href="{{ route('package.edit',['id' =>$package->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('package.destroy',['id' =>$package->id]) }}" method="post" class="ml-2">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $package->id }}">
                                        <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
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

@endsection