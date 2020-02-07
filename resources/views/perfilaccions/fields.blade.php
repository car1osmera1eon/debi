<!-- Perfil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perfil_id', 'Perfil:') !!}
    {!! Form::select('perfil_id', $perfiles, null, ['class' => 'form-control']) !!}
</div>

<!-- Modulo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modulo_id', 'Modulo:') !!}
    {!! Form::select('modulo_id', $modulos, null, ['class' => 'form-control', 'id' => 'modulo_id', 'placeholder' => 'Seleccionar']) !!}
</div>

<!-- Submodulo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('submodulo_id', 'Submodulo:') !!}
    {!! Form::select('submodulo_id', $submodulos, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar', 'id' => 'submodulo_id']) !!}
</div>

<!-- Submodulo2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('submodulo2_id', 'Submodulo2:') !!}
    {!! Form::select('submodulo2_id', $submodulos2, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar', 'id' => 'submodulo2_id']) !!}
</div>

<!-- Accion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accion_id', 'Accion:') !!}
    {!! Form::select('accion_id', $acciones, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar']) !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfilaccions.index') }}" class="btn btn-default">Cancel</a>
</div> 
<script type="text/javascript" src="{{ URL('js/perfilaccion/perfilaccion.js') }}"  defer="defer"></script>