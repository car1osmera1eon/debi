@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Provincia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mProvincia, ['route' => ['mProvincias.update', $mProvincia->id], 'method' => 'patch']) !!}

                        @include('m_provincias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection