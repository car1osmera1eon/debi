<!-- Nom Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_categoria', 'Nom Categoria:') !!}
    {!! Form::text('nom_categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mCategorias.index') }}" class="btn btn-default">Cancel</a>
</div>
