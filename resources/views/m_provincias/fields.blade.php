<!-- Codigo M Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_m_provincia', 'Codigo M Provincia:') !!}
    {!! Form::text('codigo_m_provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre M Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_m_provincia', 'Nombre M Provincia:') !!}
    {!! Form::text('nombre_m_provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_nombre', 'Codigo Nombre:') !!}
    {!! Form::text('codigo_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mProvincias.index') }}" class="btn btn-default">Cancel</a>
</div>
