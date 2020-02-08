<!-- Tipo Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_identificacion', 'Tipo Identificacion:') !!}
    {!! Form::text('tipo_identificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mTipoIdentificacions.index') }}" class="btn btn-default">Cancel</a>
</div>
