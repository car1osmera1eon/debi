<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'text-bold']) !!}
    <p>{{ $mProcedimiento->nombre }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:', ['class' => 'text-bold']) !!}
    <p>{{ $mProcedimiento->observacion }}</p>
</div>

<!-- Estado Field -->
{{-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $mProcedimiento->estado }}</p>
</div> --}}

