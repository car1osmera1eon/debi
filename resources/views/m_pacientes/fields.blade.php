<!-- Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Id Tipo Identificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_identificacion', 'Id Tipo Identificacion:') !!}
    {!! Form::select('id_tipo_identificacion', $tipo_ident, null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais_id', 'Pais:') !!}
    {!! Form::select('pais_id', $paises, 57, ['class' => 'form-control']) !!}
</div>

<!-- Primernombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primernombre', 'Primer nombre:') !!}
    {!! Form::text('primernombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundonombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundonombre', 'Segundo nombre:') !!}
    {!! Form::text('segundonombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Primerapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerapellido', 'Primer apellido:') !!}
    {!! Form::text('primerapellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundoapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoapellido', 'Segundo apellido:') !!}
    {!! Form::text('segundoapellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        // $('#fecha_nacimiento').datetimepicker({
        //     //format: '{{ config('app.date_format_js') }}'
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // });
    </script>
@endsection

<!-- Lugar Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_nacimiento', 'Lugar Nacimiento:') !!}
    {!! Form::text('lugar_nacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Edad Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('edad', 'Edad:') !!}
    {!! Form::number('edad', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', ['1'=>'Hombre', '2'=> 'Mujer'], null, ['class' => 'form-control']) !!}
</div>

<!-- Lugar Inscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_inscripcion', 'Lugar Inscripcion:') !!}
    {!! Form::text('lugar_inscripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Madre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_madre', 'Nombres Madre:') !!}
    {!! Form::text('nombres_madre', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Padre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres_padre', 'Nombres Padre:') !!}
    {!! Form::text('nombres_padre', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Localidad Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('localidad', 'Localidad:') !!}
    {!! Form::textarea('localidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_provincia', 'Codigo Provincia:') !!}
    {!! Form::select('codigo_provincia', $provincias, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar', 'id' => 'codigo_provincia']) !!}
</div>

<!-- Codigo Canton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_canton', 'Codigo Canton:') !!}
    {!! Form::select('codigo_canton', $cantones, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar', 'id' => 'codigo_canton']) !!}
</div>

<!-- Codigo Parroquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_parroquia', 'Codigo Parroquia:') !!}
    {!! Form::select('codigo_parroquia', $parroquias, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar', 'id' => 'codigo_parroquia']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mPacientes.index') }}" class="btn btn-default">Cancel</a>
</div>
<script type="text/javascript" src="{{ URL('js/paciente/paciente.js') }}"  defer="defer"></script>