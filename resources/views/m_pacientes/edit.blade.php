@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Paciente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mPaciente, ['route' => ['mPacientes.update', $mPaciente->id], 'method' => 'patch']) !!}

                        @include('m_pacientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection