@extends('layouts.app')
@section('content')
<div>
    <h4 class="mb-0">Package List</h4><br>
</div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 20%;">ID</th>
                    <th style="width: 40%;">Package Class</th>
                    <th style="width: 40%;">Package Price</th>
                </tr>
            </thead>
            <tbody>
                @if ($packages->count() > 0)
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->packageClass }}</td>
                            <td>{{ $package->packageprice }}</td>
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
