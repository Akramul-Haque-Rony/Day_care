@extends('layouts.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 25%";>Full Name</th>
                    <th style="width: 25%";>Email</th>
                    <th style="width: 35%";>Complain</th>
                    <th style="width: 15%";>Complain Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($complains->count() > 0)
                    @foreach ($complains as $complain)
                        <tr>
                            <td>{{ $complain->fullname }}</td>
                            <td>{{ $complain->complainemail }}</td>
                            <td>{{ $complain->complain }}</td>
                            <td>{{ $complain->created_at }}</td>
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
