<!-- Sistema Id Field -->
<div class="form-group">
    {!! Form::label('sistema_id', 'Sistema:', ['class' => 'text-bold']) !!}
    <p>{{ $perfil->sistema->nom_sistema }}</p>
</div>

<!-- Nom Perfil Field -->
<div class="form-group">
    {!! Form::label('nom_perfil', 'Nom Perfil:', ['class' => 'text-bold']) !!}
    <p>{{ $perfil->nom_perfil }}</p>
</div>

<!-- Estado Field -->
{{-- <div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $perfil->estado }}</p>
</div> --}}

