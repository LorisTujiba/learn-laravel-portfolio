<!DOCTYPE>
<html>
	<head>
		<title>Loris Tujiba</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
		<meta name="Owner" content="Loris Tujiba"/>
		<meta name="Author" content="Loris Tujiba"/>
		<meta name="keywords" content="Loris,Tujiba, Loris Tujiba, Web Developer, Freelancer"/>
		<meta name="Content-Type" content="text/html"/>
		<meta charset="UTF-8">
		<meta name="_token" content="{{csrf_token()}}"/>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
		<link rel="stylesheet" href="{{elixir('css/app.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/jquery.fancybox.css')}}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Caveat:400,700' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Rajdhani:600,300,400' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<script src="{{URL::asset('js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=id"></script>
		<script src="{{URL::asset('js/jquery.mousewheel-3.0.6.pack.js')}}"></script>
		<script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
		<script src="{{URL::asset('js/jquery.fancybox.pack.js')}}"></script>		
	</head>
	<body>		
		<header>
			<nav>
				<ul>
					<a>
						<li class="nav-about-me">
							About Me
						</li>
					</a>
					<a>
						<li class="nav-experiences">
							Experiences
						</li>
					</a>
					<a>
						<li class="nav-skills">
							Skills
						</li>
					</a>
					<a>
						<li class="nav-contact">
							Contact
						</li>
					</a>					
				</ul>
				<ul class="right-nav">
					<a href="http://blog.loristujiba.com">
						<li>
							Blog
						</li>
					</a>
				</ul>
			</nav>			
		</header>
		<section class="heroBanner">
			@yield('section')
		</section>
		<main>
			@yield('main')
		</main>
		<footer>		
			<div class="panel">
				<h4>Helped with</h4>
				<div class="footer-item">
					<h6>Bower</h6>
					<h6>Composer</h6>		
					<h6>Chart.js</h6>					
				</div>
				<div class="footer-item">				
					<h6>Font Awesome</h6>
					<h6>Google reCAPTCHA</h6>
					<h6>Gulp</h6>									
				</div>
				<div class="footer-item">				
					<h6>JQuery</h6>	
					<h6>Laravel</h6>	
					<h6>Sass</h6>
				</div>
				<h6>&copy 2015 Copyright Loris Tujiba</h6>
			</div>							
		</footer>		
		<div id="output">
		</div>
	</body>	
	<script src="{{URL::asset('js/chart.js')}}"></script>
	<script src="{{URL::asset('js/app.js')}}"></script>	
</html>