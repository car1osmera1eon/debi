@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Parroquia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mParroquia, ['route' => ['mParroquias.update', $mParroquia->id], 'method' => 'patch']) !!}

                        @include('m_parroquias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection