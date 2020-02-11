<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario:', ['class' => 'text-bold']) !!}
    <p>{{ $mMedico->usuario->name }}</p>
</div>

<!-- Especialidad Id Field -->
<div class="form-group">
    {!! Form::label('especialidad_id', 'Especialidad:', ['class' => 'text-bold']) !!}
    <p>{{ $mMedico->especialidad->nombre }}</p>
</div>

<!-- Registrosanitario Field -->
<div class="form-group">
    {!! Form::label('registrosanitario', 'Registro sanitario:', ['class' => 'text-bold']) !!}
    <p>{{ $mMedico->registrosanitario }}</p>
</div>

<!-- Registromedico Field -->
<div class="form-group">
    {!! Form::label('registromedico', 'Registro medico:', ['class' => 'text-bold']) !!}
    <p>{{ $mMedico->registromedico }}</p>
</div>

<!-- Registrosenecyt Field -->
{{-- <div class="form-group">
    {!! Form::label('registrosenecyt', 'Registro senecyt:', ['class' => 'text-bold']) !!}
    <p>{{ $mMedico->registrosenecyt }}</p>
</div> --}}

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $mMedico->estado }}</p>
</div>

