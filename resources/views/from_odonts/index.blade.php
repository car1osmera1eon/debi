@extends('layouts.main')
@section('breadcrumb')
    @include('from_odonts.breadcrumb') 
@endsection

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Atenciones al Paciente </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('fromOdonts.create') }}">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">

            <p>Formulario de Odontología</p>
            <div class="box-body">
                    @include('from_odonts.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

