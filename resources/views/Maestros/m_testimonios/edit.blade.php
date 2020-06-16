@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Testimonio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mTestimonio, ['route' => ['mTestimonios.update', $mTestimonio->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('maestros.m_testimonios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection