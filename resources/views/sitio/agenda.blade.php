{{-- https://colorlib.com/preview/#lifecoaching --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $empresa->nombrecomercial }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="{{ URL::asset('site/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('site/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/style.css') }}">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('assets/css/nifty.min.css') }}" rel="stylesheet">

    <!--Fullcalendar [ REQUIRED ]-->
    <link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/nifty-skin/fullcalendar-nifty.min.css') }}" rel="stylesheet">

    <!--Select2-->
    <link href="{{ URL::asset('nifty/demo/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    

  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
										<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+593 {{ $empresa->telefono1 }}</a> 
										<a href="#"><span class="fa fa-paper-plane mr-1"></span> {{ $empresa->email }}</a>
									</p>
								</div>
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
										@if($sitio->facebook!=null)
											<a href="{{$sitio->facebook}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
										@endif
										@if($sitio->twitter!=null)
											<a href="{{$sitio->twitter}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
										@endif
										@if($sitio->twitter!=null)
											<a href="{{$sitio->instagram}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
										@endif
										@if($sitio->whatsapp!=null)
											<a href="{{$sitio->whatsapp}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"><i class="sr-only">Whatsapp</i></span></a>
										@endif
										@if($sitio->telegram!=null)
											<a href="{{$sitio->telegram}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-telegram"><i class="sr-only">Telegram</i></span></a>
										@endif
						    			{{-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> --}}
						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="{{route('index')}}">{{ $empresa->nombrecomercial }}</a>
	    	{{-- <form action="#" class="searchform order-sm-start order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form> --}}
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="{{ url('nosotros') }}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{ url('servicios') }}" class="nav-link">Servicios</a></li>
				<li class="nav-item"><a href="{{ url('contacto') }}" class="nav-link">Contacto</a></li>
				@if(!isset(Auth::user()->name))
					<li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Registrarse</a></li>
				@else
					<li class="nav-item active"><a href="{{ url('/register') }}" class="nav-link">Agenda</a></li>
				@endif
				<li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Entrar</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	{!! Form::open(['route' => 'sitio.agenda', 'id' => 'frmagenda', 'name' => 'frmagenda']) !!}
	<section class="intro py-5 bg-light">
		<div class="container">
			<div class="row">
                <div class="col-9">
                    <div id='agenda'></div>
                </div>
                {{-- <div class="col-sm-4 col-md-3">
                    <select class="form-control" name="state">
                        <option value="AL">Alabama</option>
                    </select>
                <div> --}}
                <div class="col-sm-4 col-md-3">
                    <div class="panel pos-rel">
                        <select class="form-control" id="medico_id" name="medico_id" onchange="cambioMedico()">
                            @foreach($medicos as $value)
                            <option value="{{ $value->id }}" @if(isset($medico_id) and $medico_id == $value->id) selected @endif >{{ $value->usuario->name }}</option>
                            @endforeach
						</select>
						<input type="hidden" name="presentacion" id="presentacion" value="" />
                    </div>
                    <!-- Contact Widget -->
                    <!---------------------------------->
                    <div class="panel pos-rel">
                        <div class="widget-control text-right">
                        </div>
                        <div class="pad-all">
                            <div class="media pad-ver">
                                <div class="media-left">
                                    <a href="#" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" src="{{ URL::asset('assets/img/profile-photos/1.png') }}"></a>
                                </div>
                                <div class="media-body pad-top">
                                    <a href="#" class="box-inline">
                                        <span class="text-lg text-semibold text-main">{{ $medico->usuario->name }}</span>
                                        <p class="text-sm">{{ $medico->especialidad->nombre }}</p>
                                    </a>
                                </div>
                            </div>
                            <p class="pad-btm bord-bt text-sm">{{ $medico->especialidad->descripcion }}</p>
                            
                        </div>
                    </div>
                    <!---------------------------------->
                </div>
			</div>
		</div>	
	</section>
	{!! Form::close() !!}
   	

    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">Redes Sociales</h2>
								<p>Puedes encontrarnos tambien en nuestras redes sociales.</p>
								<ul class="ftco-footer-social p-0">
									@if($sitio->facebook!=null)
										<li class="ftco-animate"><a href="{{$sitio->facebook}}" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
									@endif
									@if($sitio->twitter!=null)
										<li class="ftco-animate"><a href="{{$sitio->twitter}}" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
									@endif
									@if($sitio->twitter!=null)
										<li class="ftco-animate"><a href="{{$sitio->instagram}}" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
									@endif
								</ul>
							</div>
							<div class="col-md-8">
								<div class="row justify-content-center">
									<div class="col-md-12 col-lg-10">
										<div class="row">
											<div class="col-md-4 mb-md-0 mb-4">
												{{-- <h2 class="footer-heading">Recursos</h2>
												<ul class="list-unstyled">
													<li><a href="#" class="py-1 d-block">Security</a></li>
													<li><a href="#" class="py-1 d-block">Global</a></li>
													<li><a href="#" class="py-1 d-block">Charts</a></li>
													<li><a href="#" class="py-1 d-block">Privacy</a></li>
												</ul> --}}
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Servicios</h2>
												<ul class="list-unstyled">
													@foreach ($allprocedimientos as $value)
													<li><a href="#" class="py-1 d-block">{{ $value->nombre_corto }}</a></li>
													@endforeach
												</ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Descubre</h2>
												<ul class="list-unstyled">
													<li><a href="{{ url('nosotros') }}" class="py-1 d-block">Nosotros</a></li>
													<li><a href="{{ url('servicios') }}" class="py-1 d-block">Servicios</a></li>
													<li><a href="{{ url('contacto') }}" class="py-1 d-block">Contacto</a></li>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
								<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | @carlosmeraleon 
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							</div>
						</div>
					</div>
					{{-- https://www.twilio.com/blog/create-laravel-php-notification-channel-whatsapp-twilio  --}}
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Escribenos</h2>
						<form action="#" class="form-consultation">
							{{-- <div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject">
							</div> --}}
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control submit px-3">Enviar Mensaje</button>
							</div>
            			</form>
					</div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('site/js/jquery.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery-migrate-3.0.1.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/popper.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/bootstrap.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery.easing.1.3.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery.waypoints.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery.stellar.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery.animateNumber.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/owl.carousel.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/jquery.magnific-popup.min.js') }} "></script>
  <script src="{{ URL::asset('site/js/scrollax.min.js') }} "></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
  {{-- <script src="{{ URL::asset('site/js/google-map.js') }} "></script> --}}

  

  <script src="{{ URL::asset('site/js/main.js') }} "></script>

<!--BootstrapJS [ RECOMMENDED ]-->
{{-- <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script> --}}


<script src="{{ URL::asset('nifty/demo/plugins/select2/js/select2.min.js') }}" ></script>

<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{{ URL::asset('assets/js/nifty.min.js') }}"></script>

  <!--Fullcalendar [ RECOMMENDED ]-->
  <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lib/moment.min.js') }}" ></script>
  <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.js') }}" ></script>
  <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lang/es.js') }}"></script>
    
  </body>
</html>
<script>
    var token               =   "{{ csrf_token() }}";
	var medico_id      		=   "{{$medico_id}}";
	var presentacion      	=   "{{$presentacion}}";
	var url_todoagenda      =   "{{route('sitio.agenda.data')}}";
	var url_agendamedico    =   "{{route('agendaMedico',[$medico_id])}}";	
	var inicio_atencion		=	"{{ $empresa->inicio_atencion }}";
	var fin_atencion		=	"{{ $empresa->fin_atencion }}";
</script>
<script src="{{ URL('js/sitio/agenda.js') }}"defer></script>