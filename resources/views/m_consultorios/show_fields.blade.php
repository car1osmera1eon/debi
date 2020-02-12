<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'text-bold']) !!}
    <p>{{ $mConsultorio->nombre }}</p>
</div>

<!-- Clinica Id Field -->
<div class="form-group">
    {!! Form::label('clinica_id', 'Clinica:', ['class' => 'text-bold']) !!}
    <p>{{ $mConsultorio->clinica->razonsocial }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:', ['class' => 'text-bold']) !!}
    <p>{{ $mConsultorio->observacion }}</p>
</div>

<!-- Estado Field -->
{{-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $mConsultorio->estado }}</p>
</div> --}}

