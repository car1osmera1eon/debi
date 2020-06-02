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
<div class="modal fade" id="modal-edit" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">Editar Diagnostico</h4>
            </div>

            {!! Form::open(['route' => 'fromOdonts.store']) !!}
            <!--Modal body-->
            <div class="modal-body">
                <p class="text-semibold text-main">Paciente</p>
                <div class="row">
                   
                    <!-- Especialidad Id Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::label('tipo', 'Tipo:') !!}
                        {!! Form::select('form_odon_id',$tipoDiag, null, ['class' => 'form-control']) !!}
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
                <button class="btn btn-primary">Guardar </button>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->



<script>
    var url_diagnosticos    =   "{{route('fromOdonts.diagnosticos.paciente',[$fromOdont->paciente_id])}}";
    
</script>
<script src="{{ URL('js/formularios/diagnostico1.js') }}"defer></script>