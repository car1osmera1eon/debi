@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Banner / Publicidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mBanner, ['route' => ['mBanners.update', $mBanner->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('maestros.m_banners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection