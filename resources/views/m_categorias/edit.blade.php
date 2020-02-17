@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            M Categoria
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mCategoria, ['route' => ['mCategorias.update', $mCategoria->id], 'method' => 'patch']) !!}

                        @include('m_categorias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection