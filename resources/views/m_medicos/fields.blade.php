<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario:') !!}
    {!! Form::select('usuario_id', $usuarios, null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad_id', 'Especialidad:') !!}
    {!! Form::select('especialidad_id', $especialidades, null, ['class' => 'form-control']) !!}
</div>

<!-- Registrosanitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registrosanitario', 'Registro sanitario:') !!}
    {!! Form::text('registrosanitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Registromedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registromedico', 'Registro medico:') !!}
    {!! Form::text('registromedico', null, ['class' => 'form-control']) !!}
</div>

<!-- Registrosenecyt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registrosenecyt', 'Registro senecyt:') !!}
    {!! Form::text('registrosenecyt', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mMedicos.index') }}" class="btn btn-default">Cancel</a>
</div>
