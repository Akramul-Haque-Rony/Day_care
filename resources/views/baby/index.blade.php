@extends('layouts.app')
@section('content')
    <style>
        .btn-primary {
            float: right;
        }

    </style>
    <div class="row>
    <div class=" card-header bg-primary text-light d-flex">
        <h4 class="mb-0">Baby List</h4>
        <a href="{{ route('baby.create') }}" style="color: seashell" class="btn btn-primary">Add Baby</a>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Baby Name</th>
                    <th>Parents Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($babys->count() > 0)
                    @foreach ($babys as $baby)
                        <tr>
                            <td>{{ $baby->id }}</td>
                            <td>{{ $baby->babyname }}</td>
                            <td>{{\App\Models\user::where('id', $baby->parent_id)->first()->name }}</td>
                            <td>{{ $baby->email }}</td>
                            <td>{{\App\Models\package::where('id', $baby->id)->first()->packageClass }}</td>
                            <td class="d-inline-flex">
                                <a href="{{ route('baby.edit', ['id' => $baby->id]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('baby.destroy', ['id' => $baby->id]) }}" method="post"
                                    class="ml-2">
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <input type="hidden" name="id" value="{{ $baby->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
