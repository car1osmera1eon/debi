@extends('layouts.main')

<!--Fullcalendar [ REQUIRED ]-->
<link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('nifty/demo/plugins/fullcalendar/nifty-skin/fullcalendar-nifty.min.css') }}" rel="stylesheet">
@section('content')
    <section class="content-header">
        <h1 class="pull-left">Agenda del dia </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('agendas.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('agendas.dia')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
<!--Fullcalendar [ RECOMMENDED ]-->
<script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lib/moment.min.js') }}" defer></script>
<script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/fullcalendar.min.js') }}" defer></script>
<script src="{{ URL::asset('nifty/demo/plugins/fullcalendar/lang/es.js') }}"defer></script>
