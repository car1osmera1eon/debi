@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Medico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mMedico, ['route' => ['mMedicos.update', $mMedico->id], 'method' => 'patch']) !!}

                        @include('m_medicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection