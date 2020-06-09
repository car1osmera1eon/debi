<meta name="csrf-token" content="{{ csrf_token() }}" />
<section class="content-header">
    <h3 class="pull-left">Diagnostico</h3>
    <h1 class="pull-right">
       {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('fromOdonts.create') }}">Agregar Nuevo</a> --}}
       <button type="button" id='btn_d1_agregar' name='btn_d1_agregar' class="btn btn-primary pull-right">Agregar Nuevo </button>
    </h1>
</section>
<table id="table_diagnostico" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Tipo</th> 
        <th>Diagnostico</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Id</th>
        <th>Tipo</th> 
        <th>Diagnostico</th>
        <th>Acciones</th>
    </tr>
    </tfoot>
</table>

<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="modal-edit-d1" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">Editar Diagnostico</h4>
            </div>

            {!! Form::open(['route' => 'fromOdonts.actualizardiagnostico', 'id'=>'form-ajax']) !!}
            <!--Modal body-->
            <div class="modal-body">
                <p class="text-semibold text-main">Paciente</p>
                <div class="row">
                    <!-- Especialidad Id Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        {!! Form::select('tipo_diag_id',$tipoDiag, null, ['class' => 'form-control', 'id'=>'tipo_diag_id', 'name'=>'tipo_diag_id']) !!}
                        {!! Form::hidden('id', null, ['class' => 'form-control', 'id'=>'id', 'name'=>'id']) !!}
                        {!! Form::hidden('md_paciente_id', null, ['class' => 'form-control', 'id'=>'md_paciente_id', 'name'=>'md_paciente_id']) !!}
                    </div>
    
                    <!-- Observaciones Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('diagnostico', 'Diagnostico:') !!}
                        {!! Form::textarea('diagnostico', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                
            </div>
            {!! Form::close() !!}
            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <button type="button" id='btn_actualizar' name='btn_actualizar' class="btn btn-primary">Actualizar </button>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->


<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="modal-agregar-d1" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">Agregar Diagnostico</h4>
            </div>

            {!! Form::open(['route' => 'fromOdonts.actualizardiagnostico', 'id'=>'form-add']) !!}
            <!--Modal body-->
            <div class="modal-body">
                <p class="text-semibold text-main">Paciente</p>
                <div class="row">
                    <!-- Especialidad Id Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        {!! Form::select('add_tipo_diag_id',$tipoDiag, null, ['class' => 'form-control', 'id'=>'add_tipo_diag_id', 'name'=>'add_tipo_diag_id']) !!}
                        {!! Form::hidden('add_paciente_id', null, ['class' => 'form-control', 'id'=>'add_paciente_id', 'name'=>'add_paciente_id']) !!}
                    </div>
    
                    <!-- Observaciones Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('diagnostico', 'Diagnostico:') !!}
                        {!! Form::textarea('add_diagnostico', null, ['class' => 'form-control', 'id'=>'add_diagnostico', 'name'=>'add_diagnostico']) !!}
                    </div>
                </div>
                
            </div>
            {!! Form::close() !!}
            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <button type="button" id='btn_agregar' name='btn_agregar' class="btn btn-primary">Agregar </button>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->

<script>
    var token               =   "{{ csrf_token() }}";
    var url_diagnosticos    =   "{{route('fromOdonts.diagnosticos.paciente',[$fromOdont->paciente_id])}}";
    var url_diagpaci        =   "{{route('fromOdonts.diagnosticos.xid',['id'])}}";
    var url_actualizar      =   "{{route('fromOdonts.actualizardiagnostico')}}";
    var url_eliminar        =   "{{route('fromOdonts.eliminardiagnostico')}}";
    var url_guardar         =   "{{route('fromOdonts.guardardiagnostico')}}";
    
</script>
<script src="{{ URL('js/formularios/diagnostico1.js') }}"defer></script>