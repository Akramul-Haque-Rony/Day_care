@extends('layouts.app')
@section('content')
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h1>Package</h1>
					<div id="pricing" class="container-fluid" style="background-color:LightSteelBlue">
						<div class="text-center">
						  <h2>Pricing</h2>
						  <h4>Package Plan</h4>
						</div>
						<div class="row slideanim" >
						  <div class="col-sm-4 col-xs-12">
							<div class="panel panel-default text-center" >
							  <div class="panel-heading" >
								<h1>Basic</h1>
							  </div>
							  <div class="panel-body">
								<p><strong>3</strong> Mill</p>
								<p><strong>Normal</strong> Classroom</p>
								{{-- <p><strong>2</strong> Mill</p>
								<p><strong>2</strong> Mill</p> --}}
								<p><strong>Unlimited</strong> Gaming</p>
							  </div>
							  <div class="panel-footer">
								<h3>4 Thousend</h3>
								<h4>per month</h4>
								<button class="btn btn-lg" style="background-color:Gainsboro" >Edit</button>
							  </div>
							</div>      
						  </div>     
						  <div class="col-sm-4 col-xs-12">
							<div class="panel panel-default text-center">
							  <div class="panel-heading">
								<h1>Pro</h1>
							  </div>
							  <div class="panel-body">
								<p><strong>5</strong> Mill</p>
								<p><strong>Projector</strong> Classroom</p>
								{{-- <p><strong>3</strong> Mill</p>
								<p><strong>3</strong> Mill</p> --}}
								<p><strong>Unlimited</strong> Gaming</p>
							  </div>
							  <div class="panel-footer">
								<h3>6 Thousend</h3>
								<h4>per month</h4>
								<button class="btn btn-lg" style="background-color:Gainsboro">Edit</button>
							  </div>
							</div>      
						  </div>       
						  <div class="col-sm-4 col-xs-12">
							<div class="panel panel-default text-center">
							  <div class="panel-heading">
								<h1>Premium</h1>
							  </div>
							  <div class="panel-body">
								<p><strong>Unlimited</strong> MIll</p>
								<p><strong>Digital</strong> Classroom</p>
								{{-- <p><strong>5</strong> MIll</p>
								<p><strong>5</strong> Mill</p> --}}
								<p><strong>Unlimited</strong> Gaming</p>
							  </div>
							  <div class="panel-footer">
								<h3>8 Thousend</h3>
								<h4>per month</h4>
								<button class="btn btn-lg" style="background-color:Gainsboro">Edit</button>
							  </div>
							</div>      
						  </div>    
						</div>
  					</div>
				</div>
			</div>
		</div>
@endsection