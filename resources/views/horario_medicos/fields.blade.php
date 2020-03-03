<!-- Medico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medico_id', 'Medico Id:') !!}
    {!! Form::number('medico_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ndia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ndia', 'Ndia:') !!}
    {!! Form::text('ndia', null, ['class' => 'form-control']) !!}
    {{-- <label class="checkbox-inline">
        {!! Form::hidden('ndia', 0) !!}
        {!! Form::checkbox('ndia', '1', null) !!}
    </label> --}}
</div>


<!-- Dia Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('dia', 'Dia:') !!}
    {!! Form::text('dia', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_ini', 'Hora Ini:') !!}
    {!! Form::text('hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_fin', 'Hora Fin:') !!}
    {!! Form::text('hora_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estado', 0) !!}
        {!! Form::checkbox('estado', '1', null) !!}
    </label>
</div> --}}


<!-- Id Usuariocrea Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_usuariocrea', 'Id Usuariocrea:') !!}
    {!! Form::text('id_usuariocrea', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Id Usuariomod Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id_usuariomod', 'Id Usuariomod:') !!}
    {!! Form::text('id_usuariomod', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Ip Creacion Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('ip_creacion', 'Ip Creacion:') !!}
    {!! Form::text('ip_creacion', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Ip Modificacion Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('ip_modificacion', 'Ip Modificacion:') !!}
    {!! Form::text('ip_modificacion', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('horarioMedicos.index') }}" class="btn btn-default">Cancel</a>
</div>
