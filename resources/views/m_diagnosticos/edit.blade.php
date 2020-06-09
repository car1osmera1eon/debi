@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Diagnostico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mDiagnostico, ['route' => ['mDiagnosticos.update', $mDiagnostico->id], 'method' => 'patch']) !!}

                        @include('m_diagnosticos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection