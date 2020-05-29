@extends('layouts.main')
@section('breadcrumb')
    @include('from_odonts.breadcrumb') 
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Formulario de atención a {{$fromOdont->paciente->primernombre}} {{$fromOdont->paciente->primerapellido}}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fromOdont, ['route' => ['fromOdonts.update', $fromOdont->id], 'method' => 'patch']) !!}

                        @include('from_odonts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection