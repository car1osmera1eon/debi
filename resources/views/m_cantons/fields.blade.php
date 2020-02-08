<!-- Codigo Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_provincia', 'Codigo Provincia:') !!}
    {!! Form::text('codigo_provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo M Canton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_m_canton', 'Codigo M Canton:') !!}
    {!! Form::text('codigo_m_canton', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre M Canton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_m_canton', 'Nombre M Canton:') !!}
    {!! Form::text('nombre_m_canton', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_nombre', 'Codigo Nombre:') !!}
    {!! Form::text('codigo_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mCantons.index') }}" class="btn btn-default">Cancel</a>
</div>
