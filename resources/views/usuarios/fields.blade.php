<!-- Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identificacion', 'Identificaci&oacute;n:') !!}
    {!! Form::text('identificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Primernombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primernombre', 'Primer nombre:') !!}
    {!! Form::text('primernombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundonombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundonombre', 'Segundo nombre:') !!}
    {!! Form::text('segundonombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Primerapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerapellido', 'Primer apellido:') !!}
    {!! Form::text('primerapellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundoapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoapellido', 'Segundo apellido:') !!}
    {!! Form::text('segundoapellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Remember Token Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancel</a>
</div>
