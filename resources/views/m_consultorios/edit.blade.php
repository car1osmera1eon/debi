@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            M Consultorio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mConsultorio, ['route' => ['mConsultorios.update', $mConsultorio->id], 'method' => 'patch']) !!}

                        @include('m_consultorios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection