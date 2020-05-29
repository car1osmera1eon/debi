<!-- Id Field -->
{{-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $mPaciente->id }}</p>
</div> --}}

<!-- Id Tipo Identificacion Field -->
<div class="col-md-12"> 
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('id_tipo_identificacion', 'Tipo Identificacion:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->tipoIdentificacion->tipo_identificacion }}</p>
        </div>
        
        <!-- Cedula Field -->
        <div class="form-group">
            {!! Form::label('cedula', 'Cedula:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->cedula }}</p>
        </div>
        
        <!-- Pais Id Field -->
        <div class="form-group">
            {!! Form::label('pais_id', 'Pais:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->pais->nombre }}</p>
        </div>
        
        <!-- Primernombre Field -->
        <div class="form-group">
            {!! Form::label('primernombre', 'Nombres Completos', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->primernombre }} {{ $mPaciente->segundonombre }} {{ $mPaciente->primerapellido }} {{ $mPaciente->segundoapellido }}</p>
        </div>
        
        <!-- Segundonombre Field -->
        {{-- <div class="form-group">
            {!! Form::label('segundonombre', 'Segundo nombre:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->segundonombre }}</p>
        </div> --}}
        
        <!-- Primerapellido Field -->
        {{-- <div class="form-group">
            {!! Form::label('primerapellido', 'Primer apellido:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->primerapellido }}</p>
        </div> --}}
        
        <!-- Segundoapellido Field -->
        {{-- <div class="form-group">
            {!! Form::label('segundoapellido', 'Segundo apellido:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->segundoapellido }}</p>
        </div> --}}
        
        <!-- Fecha Nacimiento Field -->
        <div class="form-group">
            {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->fecha_nacimiento }}</p>
        </div>
        
        <!-- Lugar Nacimiento Field -->
        <div class="form-group">
            {!! Form::label('lugar_nacimiento', 'Lugar Nacimiento:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->lugar_nacimiento }}</p>
        </div>
        
        <!-- Edad Field -->
        {{-- <div class="form-group">
            {!! Form::label('edad', 'Edad:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->edad }}</p>
        </div>
         --}}
        <!-- Sexo Field -->
        <div class="form-group">
            {!! Form::label('sexo', 'Sexo:', ['class' => 'text-bold']) !!}
            <p>@if($mPaciente->sexo == 1) {{ 'Hombre' }} @else 'Mujer' @endif </p>
        </div>
        
        <!-- Lugar Inscripcion Field -->
        <div class="form-group">
            {!! Form::label('lugar_inscripcion', 'Lugar Inscripcion:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->lugar_inscripcion }}</p>
        </div> 
        
        <!-- Observaciones Field -->
        <div class="form-group">
            {!! Form::label('observaciones', 'Observaciones:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->observaciones }}</p>
        </div>
        
    </div>

    <div class="col-md-6">
         <!-- Nombres Madre Field -->
         <div class="form-group">
            {!! Form::label('nombres_madre', 'Nombres Madre:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->nombres_madre }}</p>
        </div>
        
        <!-- Nombres Padre Field -->
        <div class="form-group">
            {!! Form::label('nombres_padre', 'Nombres Padre:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->nombres_padre }}</p>
        </div>
        
        <!-- Direccion Field -->
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->direccion }}</p>
        </div>
        
        <!-- Localidad Field -->
        <div class="form-group">
            {!! Form::label('localidad', 'Localidad:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->localidad }}</p>
        </div>
        
        <!-- Codigo Provincia Field -->
        <div class="form-group">
            {!! Form::label('codigo_provincia', 'Provincia:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->provincia->nombre_m_provincia }}</p>
        </div>
        
        <!-- Codigo Canton Field -->
        <div class="form-group">
            {!! Form::label('codigo_canton', 'Canton:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->canton->nombre_m_canton }}</p>
        </div>
        
        <!-- Codigo Parroquia Field -->
        <div class="form-group">
            {!! Form::label('codigo_parroquia', 'Parroquia:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->parroquia->nombre_m_parroquia }}</p>
        </div>
        
        <!-- Telefono Field -->
        <div class="form-group">
            {!! Form::label('telefono', 'Telefono:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->telefono }}</p>
        </div>
        
        <!-- Email Field -->
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'text-bold']) !!}
            <p>{{ $mPaciente->email }}</p>
        </div>
    </div>

</div>

