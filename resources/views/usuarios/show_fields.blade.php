<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:') !!}
    <p>{{ $usuario->identificacion }}</p>
</div>

<!-- Name Field -->
{{-- <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $usuario->name }}</p>
</div> --}}

<!-- Primernombre Field -->
<div class="form-group">
    {!! Form::label('Primer Nombre', 'Primer nombre:') !!}
    <p>{{ $usuario->primernombre }}</p>
</div>

<!-- Segundonombre Field -->
<div class="form-group">
    {!! Form::label('segundonombre', 'Segundo nombre:') !!}
    <p>{{ $usuario->segundonombre }}</p>
</div>

<!-- Primerapellido Field -->
<div class="form-group">
    {!! Form::label('primerapellido', 'Primer apellido:') !!}
    <p>{{ $usuario->primerapellido }}</p>
</div>

<!-- Segundoapellido Field -->
<div class="form-group">
    {!! Form::label('segundoapellido', 'Segundo apellido:') !!}
    <p>{{ $usuario->segundoapellido }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $usuario->email }}</p>
</div>


