<!-- Ruc Field -->
<div class="form-group">
    {!! Form::label('ruc', 'Ruc:') !!}
    <p>{{ $mClinica->ruc }}</p>
</div>

<!-- Razonsocial Field -->
<div class="form-group">
    {!! Form::label('razonsocial', 'Razón social:') !!}
    <p>{{ $mClinica->razonsocial }}</p>
</div>

<!-- Nombrecomercial Field -->
<div class="form-group">
    {!! Form::label('nombrecomercial', 'Nombre comercial:') !!}
    <p>{{ $mClinica->nombrecomercial }}</p>
</div>

<!-- Nombre Corto Field -->
<div class="form-group">
    {!! Form::label('nombre_corto', 'Nombre Corto:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->nombre_corto }}</p>
</div>

<!-- Provincia Id Field -->
<div class="form-group">
    {!! Form::label('provincia_id', 'Provincia:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->provincia->nombre_m_provincia }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Dirección:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->direccion }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->email }}</p>
</div>

<!-- Telefono1 Field -->
<div class="form-group">
    {!! Form::label('telefono1', 'Telefono1:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->telefono1 }}</p>
</div>

<!-- Telefono2 Field -->
<div class="form-group">
    {!! Form::label('telefono2', 'Telefono2:', ['class' => 'text-bold']) !!}
    <p>{{ $mClinica->telefono2 }}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {{-- {!! Form::label('logo', 'Logo:') !!} --}}
    {{-- <p>{{ $mClinica->logo }}</p> --}}
    <img class="img-circle img-md" src="{{ $mClinica->logo }}" alt="Logo">
</div>

<!-- Estado Field -->
{{-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $mClinica->estado }}</p>
</div> --}}

