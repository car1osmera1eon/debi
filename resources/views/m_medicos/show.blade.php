@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Medico
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('m_medicos.show_fields')
                    <a href="{{ route('mMedicos.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
