<!DOCTYPE>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{elixir('css/app.css')}}">
		<link href='https://fonts.googleapis.com/css?family=Caveat:400,700' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Rajdhani:600,300,400' rel='stylesheet' type='text/css'>
	</head>
	<body>		
		<header>
			<nav>
				<ul>
					<a>
						<li>
							Home
						</li>
					</a>
					<a>
						<li>
							Home
						</li>
					</a>
					
				</ul>
			</nav>			
		</header>
		<section>
			@yield('section')
		</section>
		<main>
			@yield('main')
		</main>
		<footer>			
		</footer>		
	</body>
	<script src="{{URL::asset('js/jquery.min.js')}}"></script>
	<script src="{{URL::asset('js/app.js')}}"></script>
</html>