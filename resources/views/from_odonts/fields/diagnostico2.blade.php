<meta name="csrf-token" content="{{ csrf_token() }}" />
<section class="content-header">
    <h3 class="pull-left">Diagnostico Presuntivo / Definitivo </h3>
    <h1 class="pull-right">
       {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('fromOdonts.create') }}">Agregar Nuevo</a> --}}
       <button type="button" id='btn_d2_agregar' name='btn_d2_agregar' class="btn btn-primary pull-right">Agregar Nuevo </button>
    </h1>
</section>
<table id="table_diagnostico_pre_def" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <th>Tipo</th> 
        <th>cie10</th> 
        <th>Diagnostico</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Id</th>
        <th>Tipo</th> 
        <th>cie10</th> 
        <th>Diagnostico</th>
        <th>Acciones</th>
    </tr>
    </tfoot>
</table>

<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="modal-edit-d2" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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



<script>
    var token               =   "{{ csrf_token() }}";
    var url_diagpredef      =   "{{route('fromOdonts.diagnosticos.predef.paciente',[$fromOdont->paciente_id])}}";
    var url_diagpredefxid   =   "{{route('fromOdonts.diagnosticos.predef.xid',['id'])}}";
    var url_actualizar      =   "{{route('fromOdonts.actualizardiagnostico')}}";
    var url_eliminar        =   "{{route('fromOdonts.eliminardiagnostico')}}";
    
</script>
<script src="{{ URL('js/formularios/diagnostico2.js') }}" defer></script>