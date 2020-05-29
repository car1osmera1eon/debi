<div class="col-md-6">
    <!-- Fechaini Field -->
    <div class="form-group">
        {!! Form::label('fechaini', 'Fecha inicio:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->fechaini }}</p>
    </div>

    <!-- Fechafin Field -->
    <div class="form-group">
        {!! Form::label('fechafin', 'Fecha fin:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->fechafin }}</p>
    </div>

    <!-- Paciente Id Field -->
    <div class="form-group">
        {!! Form::label('paciente_id', 'Paciente:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->paciente->primernombre }} {{ $agenda->paciente->primerapellido }} {{ $agenda->paciente->segundoapellido }}</p>
    </div>

    <!-- Medico Id Field -->
    {{-- <div class="form-group">
        {!! Form::label('medico_id', 'Medico:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->medico_id }}</p>
    </div> --}}

    <!-- Proc Consul Field -->
    <div class="form-group">
        {!! Form::label('proc_consul', 'Proc Consul:', ['class' => 'text-bold']) !!}
        {{-- <p>{{ $agenda->proc_consul }}</p> --}}
        <p>@if($agenda->proc_consul==1) Procedimiento  @elseif($agenda->proc_consul==2) Evoluciones @else Consulta @endif</p>
    </div>

    <!-- Consultorio Id Field -->
    <div class="form-group">
        {!! Form::label('consultorio_id', 'Consultorio:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->consultorio->nombre }}</p>
    </div>

    <!-- Procedimiento Id Field -->
    <div class="form-group">
        {!! Form::label('procedimiento_id', 'Procedimiento:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->procedimiento->nombre }}</p>
    </div>

    <!-- Observaciones Field -->
    <div class="form-group">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->observaciones }}</p>
    </div>
</div>


<div class="col-md-6">
    <!-- Tipo Cita Field -->
    <div class="form-group">
        {!! Form::label('tipo_cita', 'Tipo Cita:', ['class' => 'text-bold']) !!}
        {{-- <p>{{ $agenda->tipo_cita }}</p> --}}
        <p>@if($agenda->tipo_cita==1) Primera vez @else Consecutivo @endif</p>
    </div>

    <!-- Estado Cita Field -->
    <div class="form-group">
        {!! Form::label('estado_cita', 'Estado Cita:', ['class' => 'text-bold']) !!}
        {{-- <p>{{ $agenda->estado_cita }}</p> --}}
        <p>@if($agenda->estado_cita==0) Por confirmar  @elseif($agenda->estado_cita==1) Confirmado
            @elseif($agenda->estado_cita==2)  Reagendado @elseif($agenda->estado_cita==3)  Suspendido @elseif($agenda->estado_cita==4) Admisionado @endif</p>
    </div>

    <!-- Clinica Id Field -->
    {{-- <div class="form-group">
        {!! Form::label('clinica_id', 'Clinica:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->clinica_id }}</p>
    </div> --}}

    <!-- Reagenda Id Field -->
    <div class="form-group">
        {!! Form::label('reagenda_id', 'Reagenda:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->reagenda_id }}</p>
    </div>

    <!-- Usuarioconfirma Id Field -->
    <div class="form-group">
        {!! Form::label('usuarioconfirma_id', 'Usuario Confirma Cita:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->usuarioconfirma->name }}</p>
    </div>

    <!-- Especialidad Id Field -->
    <div class="form-group">
        {!! Form::label('especialidad_id', 'Especialidad:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->especialidad->nombre }}</p>
    </div>

    <!-- Seguro Id Field -->
    {{-- <div class="form-group">
        {!! Form::label('seguro_id', 'Seguro:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->seguro_id }}</p>
    </div> --}}

    <!-- Estado Field -->
    {{-- <div class="form-group">
        {!! Form::label('estado', 'Estado:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->estado }}</p>
    </div> --}}

    <!-- Usuariocrea Id Field -->
    {{-- <div class="form-group">
        {!! Form::label('usuariocrea_id', 'Usuariocrea Id:') !!}
        <p>{{ $agenda->usuariocrea_id }}</p>
    </div> --}}

    <!-- Usuariomod Id Field -->
    {{-- <div class="form-group">
        {!! Form::label('usuariomod_id', 'Usuariomod Id:') !!}
        <p>{{ $agenda->usuariomod_id }}</p>
    </div> --}}

    <!-- Ip Creacion Field -->
    {{-- <div class="form-group">
        {!! Form::label('ip_creacion', 'Ip Creacion:') !!}
        <p>{{ $agenda->ip_creacion }}</p>
    </div> --}}

    <!-- Ip Modificacion Field -->
    {{-- <div class="form-group">
        {!! Form::label('ip_modificacion', 'Ip Modificacion:') !!}
        <p>{{ $agenda->ip_modificacion }}</p>
    </div> --}}

    <!-- Observacion Proc Field -->
    <div class="form-group">
        {!! Form::label('observacion_proc', 'Observacion Proc:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->observacion_proc }}</p>
    </div>

    <!-- Diagnostico Proc Field -->
    <div class="form-group">
        {!! Form::label('diagnostico_proc', 'Diagnostico Proc:', ['class' => 'text-bold']) !!}
        <p>{{ $agenda->diagnostico_proc }}</p>
    </div>
</div>

