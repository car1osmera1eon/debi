@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Pais
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mPais, ['route' => ['mPais.update', $mPais->id], 'method' => 'patch']) !!}

                        @include('m_pais.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection