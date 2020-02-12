@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Procedimiento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mProcedimiento, ['route' => ['mProcedimientos.update', $mProcedimiento->id], 'method' => 'patch']) !!}

                        @include('m_procedimientos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection