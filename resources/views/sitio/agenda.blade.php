{{-- https://colorlib.com/preview/#lifecoaching --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $empresa->nombrecomercial }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('site/css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('site/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site/css/style.css') }}">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    {{-- <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

    <!--Nifty Stylesheet [ REQUIRED ]-->
    {{-- <link href="{{ URL::asset('assets/css/nifty.min.css') }}" rel="stylesheet"> --}}

    <!--Fullcalendar [ REQUIRED ]-->
    <link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/nifty-skin/fullcalendar-nifty.min.css') }}"
        rel="stylesheet">

    <!--Select2-->
    <link href="{{ URL::asset('nifty/demo/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lib/moment.min.js') }}" ></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css" rel="stylesheet">
    <link href="http://www.themeon.net/nifty/v2.9.1/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css"
        rel="stylesheet">
   {{-- <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">  --}}



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
                                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+593
                                        {{ $empresa->telefono1 }}</a>
                                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> {{ $empresa->email }}</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <p class="mb-0 d-flex">
                                        @if($sitio->facebook!=null)
                                        <a href="{{$sitio->facebook}}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                        @endif
                                        @if($sitio->twitter!=null)
                                        <a href="{{$sitio->twitter}}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                        @endif
                                        @if($sitio->twitter!=null)
                                        <a href="{{$sitio->instagram}}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                        @endif
                                        @if($sitio->whatsapp!=null)
                                        <a href="{{$sitio->whatsapp}}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-whatsapp"><i class="sr-only">Whatsapp</i></span></a>
                                        @endif
                                        @if($sitio->telegram!=null)
                                        <a href="{{$sitio->telegram}}"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-telegram"><i class="sr-only">Telegram</i></span></a>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
    {!! Form::open(['route' => 'sitio.consulta.agenda', 'id' => 'frmagenda', 'name' => 'frmagenda']) !!}
    <section class="ftco-section bg-light">
        <div class="container">
            {{-- <div id='agenda'></div> --}}
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-12 col-md-10 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Consulte disponibilidad</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        {{-- Su mensaje fue enviado, gracias! --}}
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Fecha desde</label>
                                                    <input type="text" class="form-control" name="fechadesde" id="fechadesde"
                                                        placeholder="Fecha desde" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Fecha Hasta</label>
                                                    <input type="text" class="form-control" name="fechahasta" id="fechahasta"
                                                        placeholder="Fecha Hasta" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Profesional</label>
                                                    <select class="form-control" id="profesional_id" name="profesional_id" required>
                                                        <option></option>
                                                         @foreach($medicos as $value)
                                                                        <option value="{{ $value->id }}" >{{ $value->usuario->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Procedimiento</label>
                                                    <select class="form-control" id="procedimiento_id" name="procedimiento_id">
                                                        <option></option>
                                                         @foreach($agendaproced as $value)
                                                                        <option value="{{ $value->id }}" >{{ $value->nombre_corto }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Consultar" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <li class="ftco-animate"><a href="{{$sitio->facebook}}" data-toggle="tooltip"
                                        data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a>
                                </li>
                                @endif
                                @if($sitio->twitter!=null)
                                <li class="ftco-animate"><a href="{{$sitio->twitter}}" data-toggle="tooltip"
                                        data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a>
                                </li>
                                @endif
                                @if($sitio->twitter!=null)
                                <li class="ftco-animate"><a href="{{$sitio->instagram}}" data-toggle="tooltip"
                                        data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a>
                                </li>
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
                                                <li><a href="{{ url('nosotros') }}" class="py-1 d-block">Nosotros</a>
                                                </li>
                                                <li><a href="{{ url('servicios') }}" class="py-1 d-block">Servicios</a>
                                                </li>
                                                <li><a href="{{ url('contacto') }}" class="py-1 d-block">Contacto</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-12">
                            <p class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | @carlosmeraleon
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
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
                            <textarea name="" id="" cols="30" rows="3" class="form-control"
                                placeholder="Mensaje"></textarea>
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
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>


    <script src="{{ URL::asset('site/js/main.js') }} "></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    {{-- <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script> --}}


    <script src="{{ URL::asset('nifty/demo/plugins/select2/js/select2.min.js') }}"></script>

    <!--Nifty Admin [ RECOMMENDED ]-->
    {{-- <script src="{{ URL::asset('assets/js/nifty.min.js') }}"></script> --}}

    <!--Fullcalendar [ RECOMMENDED ]-->
    <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lib/moment.min.js') }}"></script>
    <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lang/es.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

</body>

</html>
<script type="text/javascript">

    $( document ).ready(function() {
        $('#fechadesde').datepicker({ 
            format: 'dd/mm/yyyy'
        });


        $('#fechahasta').datepicker({ 
            format: 'dd/mm/yyyy'
        });

        $("#profesional_id").select2();
        $("#procedimiento_id").select2();

    });
            
</script>
<? /*
<script>
    // var token = "{{ csrf_token() }}"; 
    // var presentacion = "{{$presentacion}}";
    // var url_todoagenda = "{{route('sitio.agenda.data')}}";
    // var inicio_atencion = "{{ $empresa->inicio_atencion }}";
    // var fin_atencion = "{{ $empresa->fin_atencion }}";
    // var businessHours = {{$bussinesHour}};
    // var url_new = "{{route('crearAgenda', ['fechaini', 'fechafin'])}}";

</script>
{{-- <script src="{{ URL('js/sitio/agenda.js') }}" defer></script> --}}
