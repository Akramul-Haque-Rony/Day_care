@extends('layouts.app')
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Baby Name</th>
                    <th>Parents Name</th>
                    <th>Email</th>
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
