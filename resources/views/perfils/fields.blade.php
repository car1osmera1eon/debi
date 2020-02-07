<!-- Sistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sistema_id', 'Sistema:') !!}
    {!! Form::select('sistema_id', $sistemas, null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Perfil Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nom_perfil', 'Nom Perfil:') !!}
    {!! Form::textarea('nom_perfil', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfils.index') }}" class="btn btn-default">Cancel</a>
</div>
