@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Canton
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mCantons.store']) !!}

                        @include('m_cantons.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
