@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Form Odon Diag Paci
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('form_odon_diag_pacis.show_fields')
                    <a href="{{ route('formOdonDiagPacis.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
