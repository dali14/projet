<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </div>
        </nav>
        <header>
		<div class="header-full">
			<nav class="navbar navbar-default">
	            <div class="container">
	                <a href="#myPage"><img class="img-responsive  logo-law" src="https://res.cloudinary.com/daa09eu5f/image/upload/v1587554451/logo_vzzpql.png" alt="logo-law" ></a>
	                <div class="navbar-header nav-inline">

						<ul class="nav navbar-nav navbar-right">
		                    <li>
		                    	<div class="menu-icon">
				                	<a href="#" class="icon-bars">
									  	<div class="icon-bar1"></div>
									 	<div class="icon-bar2"></div>
									  	<div class="icon-bar3"></div>
									</a>
								</div>
		                    </li>
		                    <li><a href="blog.html">Blog</a></li>
		                </ul>

		            </div>    
	            </div>
	        </nav>
	        <div class="welcome-header">
	            <h1>Welcome to law firm</h1>
	            <p>The role of the lawyer varies greatly across legal jurisdictions, and so it can be treated here in only the most general terms.</p>
        	</div>
        	<div class="welcome-contact">
        		<div class="contact-info">
            		<p><i class="fa fa-phone"></i> Phone: 000-000-000</p><br>
            		<p><i class="fa fa-envelope"></i> Emal: johnsmith@gmail.com</p>
            	</div>
            </div>
	    </div>
	    <div id="myNav" class="overlay">
		  	<div class="overlay-content">
		    	<a href="#about">About</a>
		    	<a href="#service">Services</a>
		    	<a href="#blog">Blog</a>
		    	<a href="#contact">Contact</a>
		  	</div>
		</div>

	</header>
   

    <footer class="bg-footer" id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="footer-info footer-company">
						<h4>Law company</h4>
						<hr class="hr-footer" align="left">
						<p>
						A lawyer is a person who practices law, as an advocate, barrister, attorney, counselor or solicitor or chartered legal executive.
						</p>
						<div class=" footer-icons">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>	
				</div>

				<div class="col-md-4 col-sm-4 text-center">
					<div class="footer-info footer-contacts">
						<h4>Contact</h4>
						<hr class="hr-footer" align="left">
						<div class="contacts">
							<p><i class="fa fa-phone"></i> Phone: 000-000-000</p>
            				<p><i class="fa fa-envelope"></i> Emal: johnsmith@gmail.com</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 text-center">
					<div class="footer-info footer-links">
						<h4>Social icons</h4>
						<hr class="hr-footer" align="left">
						<ul class="nav-links">
					        <li><a href="#myPage">Home</a></li>
					        <li><a href="#about">About</a></li>
					        <li><a href="#service">Service</a></li>
					        <li><a href="#blog">Blog</a></li>
					        <li><a href="#contact">Contact</a></li>
					    </ul>
					</div>
				</div>
			</div>	
		</div>
	</footer>

	<a class="to-top" href="#myPage" title="toTop">
		<i class="fa fa-chevron-up"></i>
	</a>

	<div class="copyright">
		<p>&copy 2020 Developed by: <a href="http://www.antenagames.com" target="_blank"> www.antenagames.com</a></p>
	</div>



<script src="js/script.js"></script>


<script>
    angular.module('formApp', [])
        .controller('formController', ['$scope', function($scope) {
          	$scope.master = {};

          	$scope.update = function(user) {
            	$scope.master = angular.copy(user);
          	};

          	$scope.reset = function() {
            	$scope.user = angular.copy($scope.master);
          	};

          	$scope.reset();
    }]);
</script> 


        <main class="container py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
