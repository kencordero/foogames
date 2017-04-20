<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title')
    </title>

	<meta charset='utf-8'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/foobooks.css" >

    @stack('head')
</head>
<body>
	<header>

		@yield('header')
		<nav>
			<ul class="nav nav-tabs nav-justified">
				<li><a href="/books">Books</a>
				<li><a href="/games">Games</a>
				<li><a href="/movies">Movies</a>
				<li><a href="/music">Music</a>
			</ul>
		</nav>
	</header>

	<section>
		@yield('content')
	</section>

	<div class="navbar-fixed-bottom">
	<hr>
	<footer class="text-center">
		&copy; {{ date('Y') }} Kenneth Cordero
	</footer>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @stack('body')
</body>
</html>
