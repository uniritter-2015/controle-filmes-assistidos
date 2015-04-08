<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MFQJV</title>

	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/twitterbootstrap/1-col-portfolio.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/chosen.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/mfqjv.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/jquery.rating.css') }}">

	
</head>
<body style="background: url('{{ asset('/img/bg_img.jpg') }}') no-repeat center center fixed;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
		
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Alterar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a href="{{URL::to('/')}}"><img src={{asset('img/fqjvicon.png')}} style="margin-top:10px;width:30px;" alt="Logo"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        {!! Html::link(URL::to('adicionar-filme'), 'Novo Filme') !!}
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <!-- Page Content -->
    <div class="container" style="background-color:#fff;margin-top:-30px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                	@yield('titulo-secao')
                </h2>
                <h3>
                	@yield('subtitulo-secao')
                </h3>
            </div>
        </div>
        <!-- /.row -->

        @yield('conteudo')
        
    </div>

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset('/js/twitterbootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.noty.packaged.min.js') }}"></script>
	<script src="{{ asset('/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('/js/jquery.rating.js') }}"></script>
	<!-- <script src="{{ asset('/js/angular.min.js') }}"></script> -->
	<script src="{{ asset('/js/scripts.js') }}"></script>
	<!-- <script src="{{ asset('/js/angular.min.js.map') }}"></script> -->

	<script type="text/javascript">
        $(document).ready(function() {
            $('.data').mask('00/00/0000');
            $('.sonumero').mask('0000');
        });


		$(function(){

			$('.chosen-select').chosen({
				placeholder_text_single: "Selecione",
				placeholder_text_multiple: "Selecione vários"
			  });
			
			$('body').on('click', 'a[name="excluir-filme"]', function( $event ){
				
				$event.preventDefault();

				var $this = $(this);
				var url = $this.attr('href');
				
				noty({
					text: '<strong>DESEJA REALMENTE EXCLUIR ESTE FILME?</strong>',
					type: 'warning',
					buttons: [
						{
							addClass: 'btn btn-primary', text: 'Sim', onClick: function($noty) {

							$.post(url, null, function( $response ){

								$noty.close();
								if( $response.success ){

									$(location).attr('href','/');
								}
								
							});
								
							}
						},
						{
							addClass: 'btn btn-danger', text: 'Não',
							onClick: function($noty) { $noty.close(); }
						}
					]
				});	
			});
			
		});

	</script>
</body>
</html>