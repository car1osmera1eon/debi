<!-- Fechaini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaini', 'Fechaini:') !!}
    {!! Form::text('fechaini', null, ['class' => 'form-control','id'=>'fechaini']) !!}
</div>

@push('scripts')
    <script type="text/javascript" defer>
        $('#fechaini').datepicker({ 
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafin', 'Fechafin:') !!}
    {!! Form::text('fechafin', null, ['class' => 'form-control','id'=>'fechafin']) !!}
</div>

@push('scripts')
    <script type="text/javascript" defer>
        $('#fechafin').datepicker({ 
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente:') !!}
    {!! Form::select('paciente_id', $pacientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Medico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_id', 'Medico:') !!}
    {!! Form::select('medico_id', $medicos, null, ['class' => 'form-control']) !!}
</div>

<!-- Proc Consul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proc_consul', 'Proc Consul:') !!}
    {!! Form::select('proc_consul', array('0'=>'Consulta', '1'=>'Procedimiento', '2'=>'Evoluciones'), null, ['class' => 'form-control']) !!}
</div>


<!-- Consultorio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultorio_id', 'Consultorio:') !!}
    {!! Form::select('consultorio_id', $consultorios, null, ['class' => 'form-control']) !!}
</div>

<!-- Procedimiento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedimiento_id', 'Procedimiento:') !!}
    {!! Form::select('procedimiento_id', $procedimientos, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_cita', 'Tipo Cita:') !!}
    {!! Form::select('tipo_cita', array('0'=>'Primera vez', '1'=>'Concecutiva'), null, ['class' => 'form-control']) !!}
</div>


<!-- Estado Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_cita', 'Estado Cita:') !!}
    {!! Form::select('estado_cita', array('0'=>'Por confirmar / Cancelada', '1'=>'Confirma'), null, ['class' => 'form-control']) !!}
</div>


<!-- Clinica Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinica_id', 'Clinica:') !!}
    {!! Form::select('clinica_id', $clinicas, null, ['class' => 'form-control']) !!}
</div>

<!-- Reagenda Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reagenda_id', 'Reagenda Id:') !!}
    {!! Form::text('reagenda_id', null, ['class' => 'form-control', 'readonly' =>'readonly']) !!}
</div>

<!-- Especialidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad_id', 'Especialidad:') !!}
    {!! Form::select('especialidad_id', $especialidades, null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuarioconfirma Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('usuarioconfirma_id', 'Usuarioconfirma Id:') !!}
    {!! Form::number('usuarioconfirma_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Seguro Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('seguro_id', 'Seguro Id:') !!}
    {!! Form::number('seguro_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::select('estado', array(1=>'Activo', 2=>'Inactivo'), null, ['class' => 'form-control']) !!}
    <!-- <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label> -->
</div>


<!-- Usuariocrea Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('usuariocrea_id', 'Usuariocrea Id:') !!}
    {!! Form::number('usuariocrea_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Usuariomod Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('usuariomod_id', 'Usuariomod Id:') !!}
    {!! Form::number('usuariomod_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Ip Creacion Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('ip_creacion', 'Ip Creacion:') !!}
    {!! Form::text('ip_creacion', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Ip Modificacion Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('ip_modificacion', 'Ip Modificacion:') !!}
    {!! Form::text('ip_modificacion', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Observacion Proc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacion_proc', 'Observacion Proc:') !!}
    {!! Form::textarea('observacion_proc', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Proc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnostico_proc', 'Diagnostico Proc:') !!}
    {!! Form::textarea('diagnostico_proc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agendas.index') }}" class="btn btn-default">Cancel</a>
</div>
<script type="text/javascript" src="{{ URL('js/agenda/fields.js') }}"  defer="defer"></script>