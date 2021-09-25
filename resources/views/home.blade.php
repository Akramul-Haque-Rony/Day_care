@extends('layouts.app')
@section('content')
    <h3 class="page-title">Dashboard</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="panel" style="background-color:Azure">
                <div class="panel-heading">
                    <h3 class="panel-title" tyle="color:blue;">Total Collected</h3>
                    <h4>{{ $data['total_amount'] }} TK</h4>
                </div>
                <div class="panel-body">
                    <div id="demo-line-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel" style="background-color:Azure">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Due</h3>
                    <h4>{{ $data['total_due'] }} Tk</h4>
                </div>
                <div class="panel-body">
                    <div id="demo-bar-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
