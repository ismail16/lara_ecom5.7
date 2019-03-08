<div id="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Welcome!<strong> User</strong></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<div class="">
						<a href="product_summary.html"><span class="">Fr</span></a>
						<a href="product_summary.html"><span class="">Es</span></a>
						<span class="btn btn-mini">En</span>
						<a href="product_summary.html"><span>&pound;</span></a>
						<span class="btn btn-mini">$155.00</span>
						<a href="product_summary.html"><span class="">$</span></a>
						<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
					</div>
				</form>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="brand" href="{{ route('index') }}"><img src="{{ asset('themes/images/logo.png') }}" alt="Bootsshop"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('index') }}">About us</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('index') }}">Contract</a>
					</li>
				</ul>
				<div class="col-xs-8 col-xs-offset-2" style="background-color: #f8f9fa;">
					<div class="input-group">
						<div class="input-group-btn search-panel">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span id="search_concept">Filter by</span> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#contains">Contains</a></li>
								<li><a href="#its_equal">It's equal</a></li>
								<li><a href="#greather_than">Greather than ></a></li>
								<li><a href="#less_than">Less than < </a></li>
								<li class="divider"></li>
								<li><a href="#all">Anything</a></li>
							</ul>
						</div>
						<input type="text" class="form-control" name="x" placeholder="Search term...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="icon-zoom-in"></i></button>
						</span>
					</div>
				</div>
				<ul class="navbar-nav ml-auto">
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<!-- <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px"> -->
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								<img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="rounded-circle" style="width:40px;">
								{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


								<a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>

								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- Header End================================= -->
