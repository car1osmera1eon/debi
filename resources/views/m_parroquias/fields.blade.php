<!-- Codigo Canton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_canton', 'Codigo Canton:') !!}
    {!! Form::text('codigo_canton', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo M Parroquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_m_parroquia', 'Codigo M Parroquia:') !!}
    {!! Form::text('codigo_m_parroquia', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre M Parroquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_m_parroquia', 'Nombre M Parroquia:') !!}
    {!! Form::text('nombre_m_parroquia', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_nombre', 'Codigo Nombre:') !!}
    {!! Form::text('codigo_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mParroquias.index') }}" class="btn btn-default">Cancel</a>
</div>
