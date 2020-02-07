@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Perfilaccion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'perfilaccions.store']) !!}

                        @include('perfilaccions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
