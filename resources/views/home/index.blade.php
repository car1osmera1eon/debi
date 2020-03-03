{{-- @extends('layouts.app') --}}
@extends('layouts.main')

@section('content')  
@foreach ($medicos as $medico)
    <div class="col-lg-4">
        <!--Profile Widget-->
        <!--===================================================-->
        <div class="panel pos-rel">
            <div class="pad-all">
                <div class="media">
                    <div class="media-left">
                        <img alt="Profile Picture" class="img-md img-circle" src="http://localhost:8000/assets/img/profile-photos/1.png">
                    </div>
                    <div class="media-body pad-top">
                    <span class="text-lg text-semibold">{{ $medico->usuario->name }}</span>
                        <p class="text-sm">{{ $medico->especialidad->titulo }}</p>
                    </div>
                </div>
                <ul class="list-unstyled bord-top pad-top mar-no row">
                <div class="list-group bg-trans mar-no">
                    <a class="list-group-item list-item-sm" href="{{route('agendaDelDia',[$medico->id])}}">
                        {{-- <span class="label label-primary pull-right">15</span> --}}
                        Agenda
                    </a>
                    <a class="list-group-item list-item-sm" href="{{route('horarioMedico',[$medico->id])}}">
                        {{-- <span class="label label-success pull-right">100</span> --}}
                        Horario Laboral
                    </a>
                    <a class="list-group-item list-item-sm" href="">
                        <span class="label label-success pull-right">40</span>
                        Calendario
                    </a>
                </div>
            </div>
        </div>
        <!--===================================================-->
    </div> 
@endforeach 
@endsection
