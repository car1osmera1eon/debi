@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Clinica
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mClinicas.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('m_clinicas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
