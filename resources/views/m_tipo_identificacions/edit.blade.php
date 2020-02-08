@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Tipo Identificacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mTipoIdentificacion, ['route' => ['mTipoIdentificacions.update', $mTipoIdentificacion->id], 'method' => 'patch']) !!}

                        @include('m_tipo_identificacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection