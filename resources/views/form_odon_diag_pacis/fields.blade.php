<!-- Form Odon Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('form_odon_id', 'Form Odon Id:') !!}
    {!! Form::number('form_odon_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paciente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente_id', 'Paciente Id:') !!}
    {!! Form::number('paciente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Diag Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_diag_id', 'Tipo Diag Id:') !!}
    {!! Form::number('tipo_diag_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('formOdonDiagPacis.index') }}" class="btn btn-default">Cancel</a>
</div>
