<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>
	<link href="{{asset('css/app.css')}}" rel="stylesheet"/>
	<script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
	<nav class="navbar bg-white navbar-light ">
		<ul class="navbar nav">
			<li class="nav-item"><a class="nav-link" href='/'>Home</a></li>
			<li class="nav-item"><a class="nav-link" href='/contact'>Contact Us</a></li>
			<li class="nav-item"><a class="nav-link" href='/welcome'>Welcome</a></li>
		</ul>
	</nav>
	@yield('viewingpages')
</body>
</html>