<!-- Perfil Id Field -->
<div class="form-group">
    {!! Form::label('perfil_id', 'Perfil:') !!}
    <p>{{ $perfilaccion->perfil->nom_perfil }}</p>
</div>

<!-- Accion Id Field -->
<div class="form-group">
    {!! Form::label('accion_id', 'Accion:') !!}
    <p>{{ $perfilaccion->accion->nom_accion }}</p>
</div>

<!-- Submodulo Id Field -->
<div class="form-group">
    {!! Form::label('submodulo_id', 'Submodulo:') !!}
    <p>{{ $perfilaccion->submodulo->nom_submodulo }}</p>
</div>

<!-- Submodulo2 Id Field -->
<div class="form-group">
    {!! Form::label('submodulo2_id', 'Submodulo2:') !!}
    <p>@isset($perfilaccion->submodulo2->nom_submodulo2) {{ $perfilaccion->submodulo2->nom_submodulo2 }} @endisset</p>
</div>

<!-- Estado Field -->
{{-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $perfilaccion->estado }}</p>
</div> --}}

