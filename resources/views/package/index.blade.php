@extends('layouts.app')
@section('content')
    <style>
        .btn-primary {
            float: right;
        }

    </style>
    <div class="row>
        <div class=" card-header bg-primary text-light d-flex">
        <h4 class="mb-0">Package List</h4>
        <a href="{{ route('package.create') }}" style="color: seashell" class="btn btn-primary">Add Package</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 30%;">Package Class</th>
                    <th style="width: 30%;">Package Price</th>
                    <th style="width: 30%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($packages->count() > 0)
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->packageClass }}</td>
                            <td>{{ $package->packageprice }}</td>
                            <td class="d-inline-flex">
                                <a href="{{ route('package.edit', ['id' => $package->id]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('package.destroy', ['id' => $package->id]) }}" method="post"
                                    class="ml-2">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $package->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
