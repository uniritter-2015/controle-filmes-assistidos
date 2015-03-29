<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controle de Filme Assistidos</title>

	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/1-col-portfolio.css') }}">
	
	<style type="text/css">
	
		table.botoes-acao { position: relative; margin-top: 10px; }
		table.botoes-acao td { padding-bottom: 3px }
		table.botoes-acao .btn { width: 115px }
		
	</style>
	
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {!! Html::link(URL::to('/'), 'Home', ['class' => 'navbar-brand']) !!}
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        {!! Html::link(URL::to('form-cadastro'), 'Novo Filme') !!}
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                	@yield('titulo-secao')
                </h2>
            </div>
        </div>
        <!-- /.row -->

        @yield('conteudo')
        
    </div>

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('/js/twitterbootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.noty.packaged.min.js') }}"></script>
	<!-- <script src="{{ asset('/js/angular.min.js') }}"></script> -->
	<!-- <script src="{{ asset('/js/scripts.js') }}"></script> -->
	<!-- <script src="{{ asset('/js/angular.min.js.map') }}"></script> -->
	
	<script type="text/javascript">

		$(function(){

			$('body').on('click', 'a[name="excluir-filme"]', function( $event ){
				debugger;
				$event.preventDefault();

				var $this = $(this);
				var url = $this.attr('href');
				
				noty({
					text: '<strong>DESEJA REALMENTE EXCLUIR ESTE FILME?</strong>',
					type: 'warning',
					buttons: [
						{addClass: 'btn btn-primary', text: 'Sim', onClick: function($noty) {

							$.post(url, null, function( $response ){

								$noty.close();
								if( $response.success ){

									$(location).attr('href','/');
								}
								
							});
								
							}
						},
						{addClass: 'btn btn-danger', text: 'Não', onClick: function($noty) {
								$noty.close();
							}
						}
					]
				});	
			});
			
		});

	</script>
</body>
</html>