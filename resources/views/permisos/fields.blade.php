<!-- Perfil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perfil_id', 'Perfil:') !!}
    {!! Form::select('perfil_id', $perfiles, null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario:') !!}
    {!! Form::select('usuario_id', $usuarios, null,['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('permisos.index') }}" class="btn btn-default">Cancel</a>
</div>
