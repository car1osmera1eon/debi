@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Acciones por Perfil
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($perfilaccion, ['route' => ['perfilaccions.update', $perfilaccion->id], 'method' => 'patch']) !!}

                        @include('perfilaccions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection