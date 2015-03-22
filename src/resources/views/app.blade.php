<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/slate.theme.min.css') }}">
	
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('/js/twitterbootstrap/bootstrap.min.js') }}"></script>
</body>
</html>