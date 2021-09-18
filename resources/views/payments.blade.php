@extends('layouts.app')
@section('content')
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">payments</h3>
					<h2>Income</h2>
					<button  class="col-md-6 panel panel-heading" style="background-color:Azure"> 						
						<li><a href="{{ route('baby.index') }}" class="">Baby List</a></li>					
					</button>
		
						<div class="col-md-6">
							<div class="panel" style="background-color:Azure">
								<div class="panel-heading">
									<h3 class="panel-title">Total Due</h3>
									<h4>40,000 Tk</h4>
								</div>
								<div class="panel-body">
									<div id="demo-bar-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style="background-color:Cornsilk">
								<div class="panel-heading">
									<h3 class="panel-title">Online payment</h3>
									<h4>80,000 TK</h4>
								</div>
								<div class="panel-body">
									<div id="demo-line-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel" style="background-color:Cornsilk">
								<div class="panel-heading">
									<h3 class="panel-title">Cash Payment</h3>
									<h4>80,000 Tk</h4>
								</div>
								<div class="panel-body">
									<div id="demo-bar-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<h2>Expenditure</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style="background-color:LavenderBlush">
								<div class="panel-heading">
									<h3 class="panel-title">Teacher Salary</h3>
									<h4>60,000 TK</h4>
								</div>
								<div class="panel-body">
									<div id="demo-area-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel" style="background-color:LavenderBlush">
								<div class="panel-heading">
									<h3 class="panel-title">Staff Salary</h3>
									<h4>40,000 TK</h4>
								</div>
								<div class="panel-body">
									<div id="multiple-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel" style="background-color:AntiqueWhite">
								<div class="panel-heading">
									<h3 class="panel-title">Mill Cost</h3>
									<h4>60,000 TK</h4>
								</div>
								<div class="panel-body">
									<div id="demo-line-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel" style="background-color:AntiqueWhite">
								<div class="panel-heading">
									<h3 class="panel-title">Total Others</h3>
									<h4>10,000 Tk</h4>
								</div>
								<div class="panel-body">
									<div id="demo-bar-chart" class="ct-chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection