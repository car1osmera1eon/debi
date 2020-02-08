<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Iso2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iso2', 'Iso2:') !!}
    {!! Form::text('iso2', null, ['class' => 'form-control']) !!}
</div>

<!-- Iso3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iso3', 'Iso3:') !!}
    {!! Form::text('iso3', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_code', 'Phone Code:') !!}
    {!! Form::text('phone_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mPais.index') }}" class="btn btn-default">Cancel</a>
</div>
