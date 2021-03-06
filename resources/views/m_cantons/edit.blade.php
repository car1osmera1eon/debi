@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Canton
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mCanton, ['route' => ['mCantons.update', $mCanton->id], 'method' => 'patch']) !!}

                        @include('m_cantons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection