<!-- Perfil Id Field -->
<div class="form-group">
    {!! Form::label('perfil_id', 'Perfil Id:') !!}
    <p>{{ $permisos->perfil->nom_perfil }}</p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $permisos->usuario->name }}</p>
</div>

<!-- Estado Field 
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $permisos->estado }}</p>
</div>
-->
