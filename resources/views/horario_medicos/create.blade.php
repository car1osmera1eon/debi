@extends('layouts.main')
@include('horario_medicos.breadcrumb')
@section('content')
    <section class="content-header">
        <h1>
            Horario del Medico
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'horarioMedicos.store']) !!}

                        @include('horario_medicos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
