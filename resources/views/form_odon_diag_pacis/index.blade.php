@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Form Odon Diag Pacis</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('formOdonDiagPacis.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('form_odon_diag_pacis.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

