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
	</header>

	<section>
		@yield('content')
	</section>

	<hr>
	<footer>
		&copy; {{ date('Y') }} Kenneth Cordero
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @stack('body')
</body>
</html>
