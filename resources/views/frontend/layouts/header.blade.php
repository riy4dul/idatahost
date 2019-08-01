<header id="header" class="header-dynamic header-light header-shadow-scroll">
			<div class="container">
				<a class="logo" href="index.html">
					<img src="{{asset('frontend/img/logos/header-color.png')}}" alt="">
					{{-- <img src="{{asset('frontend/img/logos/header-color2.png')}}" alt=""> --}}

				</a>
				<nav>
					<ul class="nav-primary">
						<li>
							<a href="{{route('/')}}">Home</a>
						</li>
						<li>
							<a>Server</a>
							<ul>
								<li><a href="{{route('dedicatedServer')}}">Dedicated Server</a></li>
								<li><a href="{{route('cloudServer')}}">Cloud Server</a></li>
								<li><a href="{{route('storageServer')}}">Storage Server</a></li>
							</ul>
						</li>
						<li>
							<a>Hosting</a>
							<ul>
								<li><a href="{{route('unlimitedHosting')}}">Unlimited Hosting </a></li>
								<li><a href="{{route('webHosting')}}">Web Hosting </a></li>
								<li><a href="{{route('resellerHosting')}}">Reseller Hosting </a></li>
								<li><a href="{{route('corporateEMailHosting')}}">Corporate E-Mail Hosting </a></li>
								<li><a href="{{route('wordpressHosting')}}">Wordpress Hosting </a></li>
								<li><a href="{{route('vpsHosting')}}">Vps Hosting </a></li>
							</ul>
						</li>
						
						<li>
							<a href="{{route('domain')}}">Domain</a>
						</li>
						<li>
							<a href="{{route('contact')}}">Contact</a>
						</li>
						
						
						<li>
							<a class="button button-secondary" href="#">
								<i class="fas fa-lock icon-left"></i>Client Login
							</a>
						</li>
					</ul>
					<ul class="nav-secondary">
						<li>
							<a><i class="fas fa-phone icon-left"></i>+88 01400883400</a>
						</li>
						<li>
							<a><i class="fas fa-question-circle icon-left"></i>support@bdsoftit.com</a>
						</li>
						{{-- <li>
							<a href="service-status.html"><i class="fas fa-check icon-left"></i>Service Status</a>
						</li> --}}
					</ul>
				</nav>
			</div>
		</header>