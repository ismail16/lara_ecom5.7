@extends('frontend.layouts.master')

@section('content')
<div id="mainBody">
	<div class="container">
		<div class="row">
			@include('frontend.partial.sidebar')
			<div class="col-md-9">
				<!-- <div class="well well-small">
					<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
					slidr
				</div> -->
				<h4>Latest Products </h4>
				<div class="row">
					<div class="col-sm-4" style="text-align: -webkit-center;">
						<div class="card ">
							<img class="card-img-top" src="themes/images/products/6.jpg" alt="Card image" style="width:150px;">
							<div class="card-body">
								<p class="card-text">Some example text some example text</p>
								<h4 style="text-align:center">
									<a class="btn btn-info btn-sm" href="product_details.html"> <i class="icon-zoom-in"></i></a>
									<a class="btn btn-info btn-sm" href="#">Add to <i class="icon-shopping-cart"></i></a>
									<a class="btn btn-primary btn-sm" href="#">$222.00</a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
