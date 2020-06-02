@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Form Odon Diag Paci
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'formOdonDiagPacis.store']) !!}

                        @include('form_odon_diag_pacis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
