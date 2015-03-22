<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controle de Filme Assistidos</title>

	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/slate.theme.min.css') }}">
	
</head>
<body>

	

	<div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Cadastrar <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Editar</a></li>
            <li><a href="#">Pesquisar</a></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        @yield('content')
        </div>
        
       </div>
      </div>

    

    @yield('footer')

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('/js/twitterbootstrap/bootstrap.min.js') }}"></script>
</body>
</html>