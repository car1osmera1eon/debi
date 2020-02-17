<!-- Fechaini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaini', 'Fechaini:') !!}
    {!! Form::date('fechaini', null, ['class' => 'form-control','id'=>'fechaini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaini').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafin', 'Fechafin:') !!}
    {!! Form::date('fechafin', null, ['class' => 'form-control','id'=>'fechafin']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechafin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    {!! Form::number('paciente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Medico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_id', 'Medico Id:') !!}
    {!! Form::number('medico_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Proc Consul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proc_consul', 'Proc Consul:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('proc_consul', 0) !!}
        {!! Form::checkbox('proc_consul', '1', null) !!}
    </label>
</div>


<!-- Consultorio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultorio_id', 'Consultorio Id:') !!}
    {!! Form::number('consultorio_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedimiento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedimiento_id', 'Procedimiento Id:') !!}
    {!! Form::number('procedimiento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_cita', 'Tipo Cita:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tipo_cita', 0) !!}
        {!! Form::checkbox('tipo_cita', '1', null) !!}
    </label>
</div>


<!-- Estado Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_cita', 'Estado Cita:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado_cita', 0) !!}
        {!! Form::checkbox('estado_cita', '1', null) !!}
    </label>
</div>


<!-- Clinica Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinica_id', 'Clinica Id:') !!}
    {!! Form::number('clinica_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reagenda Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reagenda_id', 'Reagenda Id:') !!}
    {!! Form::number('reagenda_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuarioconfirma Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuarioconfirma_id', 'Usuarioconfirma Id:') !!}
    {!! Form::number('usuarioconfirma_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad_id', 'Especialidad Id:') !!}
    {!! Form::number('especialidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Seguro Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seguro_id', 'Seguro Id:') !!}
    {!! Form::number('seguro_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label>
</div>


<!-- Usuariocrea Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuariocrea_id', 'Usuariocrea Id:') !!}
    {!! Form::number('usuariocrea_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuariomod Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuariomod_id', 'Usuariomod Id:') !!}
    {!! Form::number('usuariomod_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Creacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_creacion', 'Ip Creacion:') !!}
    {!! Form::text('ip_creacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Modificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_modificacion', 'Ip Modificacion:') !!}
    {!! Form::text('ip_modificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion Proc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion_proc', 'Observacion Proc:') !!}
    {!! Form::text('observacion_proc', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Proc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnostico_proc', 'Diagnostico Proc:') !!}
    {!! Form::text('diagnostico_proc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agendas.index') }}" class="btn btn-default">Cancel</a>
</div>
