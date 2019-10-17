<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title> @yield('pageTitle') </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="container">
			@include('partials.navbar')
			@yield('mainContent')
			@include('partials.footer')
		</div>
	</body>
</html>
