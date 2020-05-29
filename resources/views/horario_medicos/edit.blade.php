@extends('layouts.main')
@include('horario_medicos.breadcrumb')
@section('content')
    <section class="content-header">
        <h1>
            Horario Medico {{ $medicos[$horarioMedico->medico_id] }}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($horarioMedico, ['route' => ['horarioMedicos.update', $horarioMedico->id], 'method' => 'patch']) !!}

                        @include('horario_medicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection