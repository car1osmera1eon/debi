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
	        	<li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="{{ url('nosotros') }}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{ url('servicios') }}" class="nav-link">Servicios</a></li>
				<li class="nav-item"><a href="{{ url('contacto') }}" class="nav-link">Contacto</a></li>
				<li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Registrarse</a></li>
				<li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Entrar</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
		@foreach ($banner as $value)
		<div class="slider-item" style="background-image:url({{ URL::asset($value->image) }});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-8 ftco-animate">
						<div class="text w-100 text-center">
							{{-- <h2>Nuestro Negocio</h2> --}}
						<h1 class="mb-4">{{$value->descripcion}}</h1>
						<p><a href="#" class="btn btn-white">Agendar Cita</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	    </div>
	</div>

	<section class="intro py-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-box w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-phone"></span>
						</div>
						{{--  --}}
						<div class="text pl-3">
							<h4 class="mb-0">Llamanos: <a href="https://wa.link/3bom5q" target="_blank">+593{{ $empresa->telefono1 }}</a></h4>
							<span> {{ $empresa->direccion }}</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-box w-100 d-flex">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-clock-o"></span>
						</div>
						<div class="text pl-3">
							<h4 class="mb-0">Horaio de Atenci&oacute;n</h4>
							<span>Mon - Sat 7:00 AM - 8:00 PM / Domingos cerrado</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-box w-100">
						<p class="mb-0"><a href="#" class="btn btn-primary">Agende con nosotros</a></p>
					</div>
				</div>
			</div>
		</div>	
	</section>
   	
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{ URL::asset('site/images/about.jpg') }});">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="heading-section pl-md-4 pt-md-5">
    					<span class="subheading">Te damos una cordial bienvenida</span>
	            		<h2 class="mb-4">Somos tu mejor opcion para ti</h2>
					</div>
					@foreach ($procedimientos as $value)
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-check"></div>
    					<div class="text pl-4">
    						<h4>{{ $value->nombre }}</h4>
    						<p>{{ $value->observacion }}</p>
    					</div>
					</div>
					@endforeach 
	        </div>
        </div>
    	</div>
    </section>

    {{-- <section class="ftco-section bg-light ftco-no-pt">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-accounting-1"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Accounting</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-tax"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Tax, Compliance &amp; Payroll</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-loan"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Financial Services</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-budget"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Growth &amp; Funding Access</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section> --}}

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
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ URL::asset('site/images/person_1.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ URL::asset('site/images/person_2.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url({{ URL::asset('site/images/person_3.jpg') }})"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="img-faqs w-100">
	    				<div class="img mb-4 mb-sm-0" style="background-image:url(images/about-2.jpg);">
	    				</div>
	    				<div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
    					<span class="subheading">FAQs</span>
	            <h2 class="mb-3">Frequently Asks Questions</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    				</div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
						        	<p class="mb-0">How to fixed a problem?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0">How to manage your business loans?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-0">How to grow your investments funds?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0">What are those requirements for businesses?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						      </div>
						    </div>
						  </div>
						</div>
	        </div>
        </div>
    	</div>
    </section> --}}

    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">March 31, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
		

    {{-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
    		<div class="row">
          <div class="col-md-7 d-flex align-items-center">
            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Affordable Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Personal</span>
	            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Business</span>
	            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Ultimate</span>
	            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            	<span class="excerpt d-block">Premium</span>
	            <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
	              <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Branding Services</li>
	              <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
	              <li><span class="fa fa-check mr-2"></span>Sales Management</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section> --}}

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL::asset('site/js/google-map.js') }} "></script>
  <script src="{{ URL::asset('site/js/main.js') }} "></script>
    
  </body>
</html>