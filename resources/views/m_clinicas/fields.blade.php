<!-- Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc', 'Ruc:') !!}
    {!! Form::text('ruc', null, ['class' => 'form-control']) !!}
</div>

<!-- Razonsocial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razonsocial', 'Razón social:') !!}
    {!! Form::text('razonsocial', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombrecomercial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrecomercial', 'Nombre comercial:') !!}
    {!! Form::text('nombrecomercial', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Corto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_corto', 'Nombre Corto:') !!}
    {!! Form::text('nombre_corto', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincia_id', 'Provincia:') !!}
    {!! Form::select('provincia_id', $provincias, '09', ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono1', 'Telefono1:') !!}
    {!! Form::text('telefono1', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono2', 'Telefono2:') !!}
    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    {!! Form::file('logo') !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label>
</div> --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mClinicas.index') }}" class="btn btn-default">Cancel</a>
</div>
