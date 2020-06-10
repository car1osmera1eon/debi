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

            {!! Form::open(['route' => 'fromOdonts.actualizardiagnostico', 'id'=>'form-md2-edit']) !!}
            <!--Modal body-->
            <div class="modal-body">
                <p class="text-semibold text-main">Paciente</p>
                <div class="row">
                    <!-- Tipo Id Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        {!! Form::select('md2_tipo',$tipo_predef, null, ['class' => 'form-control', 'id'=>'md2_tipo', 'name'=>'md2_tipo', 'style'=>'width: 100%']) !!}
                        {!! Form::hidden('md2_id', null, ['class' => 'form-control', 'id'=>'md2_id', 'name'=>'md2_id']) !!}
                        {!! Form::hidden('md2_paciente_id', null, ['class' => 'form-control', 'id'=>'md2_paciente_id', 'name'=>'md2_paciente_id']) !!}
                    </div>
                    <!-- CIE10 Id Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('md2_cie10', 'cie10:') !!}
                        {!! Form::text('md2_cie10',null, ['class' => 'form-control', 'id'=>'md2_cie10', 'name'=>'md2_cie10']) !!}
                    </div>
                    <div id="md2_cie10_list"></div>
                    <!-- Observacion Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('md2_observacion', 'Obserbación:') !!}
                        {!! Form::textarea('md2_observacioncie10', null, ['class' => 'form-control', 'id'=>'md2_observacioncie10', 'name'=>'md2_observacioncie10']) !!}
                    </div>
                </div>
                
            </div>
            {!! Form::close() !!}
            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <button type="button" id='md2_btn_actualizar' name='btn_actualizar' class="btn btn-primary">Actualizar </button>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->



<script>
    var token                   =   "{{ csrf_token() }}";
    var url_diagpredef          =   "{{route('fromOdonts.diagnosticos.predef.paciente',[$fromOdont->paciente_id])}}";
    var url_diagpredefxid       =   "{{route('fromOdonts.diagnosticos.predef.xid',['id'])}}";
    var url_actualizarpredef    =   "{{route('fromOdonts.actualizardiagnosticopredef')}}";
    var url_eliminar            =   "{{route('fromOdonts.eliminardiagnostico')}}";
    var url_autocomplecie10     =   "{{ route('fromOdonts.autocompletar.cie10') }}";
    
</script>
<script src="{{ URL('js/formularios/diagnostico2.js') }}" defer></script>