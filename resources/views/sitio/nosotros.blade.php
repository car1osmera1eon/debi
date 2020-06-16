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
	        	<li class="nav-item active"><a href="{{ url('nosotros') }}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{ url('servicios') }}" class="nav-link">Servicios</a></li>
            <li class="nav-item"><a href="{{ url('contacto') }}" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Registrarse</a></li>
            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Entrar</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ URL::asset($sitio->image) }});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('index')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Nosotros<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Nosotros</h1>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="heading-section pl-md-4 pt-md-5">
    					<span class="subheading">{{ $empresa->nombrecomercial }}</span>
                        <h2 class="mb-4">Quienes Somos</h2>
                        <p>{{ $empresa->resena }}</p>
    				</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="{{ (date('Y') - $empresa->anio_fundacion) }}">0</strong>
              </div>
              <div class="text">
              	<span>A&ntilde;os de Experiencia</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="200">0</strong>
              </div>
              <div class="text">
              	<span>Total de Atenciones</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
              </div>
              <div class="text">
              	<span>Awards Won</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="{{ ($empresa->num_profesionales) }}">0</strong>
              </div>
              <div class="text">
              	<span>Total de Profesionales</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonios</span>
            <h2>Clientes Satisfechos</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              @foreach ($testimonios as $value)
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                <div class="text">
                  <p class="mb-4">{{ $value->testimonio }}</p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url({{ URL::asset($value->image) }})"></div>
                    <div class="pl-3">
                      <p class="name">{{ $value->paciente->primernombre }} {{ $value->paciente->primerapellido }}</p>
                      {{-- <span class="position">Marketing Manager</span> --}}
                    </div>
                  </div>
                </div>
                </div>
              </div>
              @endforeach 
            </div>
          </div>
        </div>
      </div>
    </section>


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
                                              <ul class="list-unstyled">
                                                <li><a href="{{ url('index') }}" class="py-1 d-block">Home</a></li>
                                                <li><a href="{{ url('servicios') }}" class="py-1 d-block">Servicios</a></li>
                                                <li><a href="{{ url('contacto') }}" class="py-1 d-block">Contacto</a></li>
                                              </ul>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL::asset('site/js/google-map.js') }} "></script>
  <script src="{{ URL::asset('site/js/main.js') }} "></script>
    
  </body>
</html>