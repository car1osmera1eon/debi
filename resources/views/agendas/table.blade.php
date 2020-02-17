<div class="table-responsive">
    <table class="table" id="agendas-table">
        <thead>
            <tr>
                <th>Fechaini</th>
        <th>Fechafin</th>
        <th>Paciente Id</th>
        <th>Medico Id</th>
        <th>Proc Consul</th>
        <th>Consultorio Id</th>
        <th>Procedimiento Id</th>
        <th>Tipo Cita</th>
        <th>Estado Cita</th>
        <th>Clinica Id</th>
        <th>Reagenda Id</th>
        <th>Observaciones</th>
        <th>Usuarioconfirma Id</th>
        <th>Especialidad Id</th>
        <th>Seguro Id</th>
        <th>Estado</th>
        <th>Usuariocrea Id</th>
        <th>Usuariomod Id</th>
        <th>Ip Creacion</th>
        <th>Ip Modificacion</th>
        <th>Observacion Proc</th>
        <th>Diagnostico Proc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agendas as $agenda)
            <tr>
                <td>{{ $agenda->fechaini }}</td>
            <td>{{ $agenda->fechafin }}</td>
            <td>{{ $agenda->paciente_id }}</td>
            <td>{{ $agenda->medico_id }}</td>
            <td>{{ $agenda->proc_consul }}</td>
            <td>{{ $agenda->consultorio_id }}</td>
            <td>{{ $agenda->procedimiento_id }}</td>
            <td>{{ $agenda->tipo_cita }}</td>
            <td>{{ $agenda->estado_cita }}</td>
            <td>{{ $agenda->clinica_id }}</td>
            <td>{{ $agenda->reagenda_id }}</td>
            <td>{{ $agenda->observaciones }}</td>
            <td>{{ $agenda->usuarioconfirma_id }}</td>
            <td>{{ $agenda->especialidad_id }}</td>
            <td>{{ $agenda->seguro_id }}</td>
            <td>{{ $agenda->estado }}</td>
            <td>{{ $agenda->usuariocrea_id }}</td>
            <td>{{ $agenda->usuariomod_id }}</td>
            <td>{{ $agenda->ip_creacion }}</td>
            <td>{{ $agenda->ip_modificacion }}</td>
            <td>{{ $agenda->observacion_proc }}</td>
            <td>{{ $agenda->diagnostico_proc }}</td>
                <td>
                    {!! Form::open(['route' => ['agendas.destroy', $agenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agendas.show', [$agenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agendas.edit', [$agenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
