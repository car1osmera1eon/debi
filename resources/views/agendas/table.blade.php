
<div class="table-responsive">
    <table class="table table-striped" id="agendas-table">
        <thead>
            <tr>
                <th>Fec. inicio</th>
                <th>Fec. fin</th>
                <th>Paciente</th>
                {{-- <th>Medico</th> --}}
                <th>Proc. Consulta</th>
                {{-- <th>Consultorio</th> --}}
                <th>Procedimiento</th>
                <th>Tipo Cita</th>
                <th>Estado Cita</th>
                {{-- <th>Clinica Id</th> --}}
                <th>Reagenda Id</th>
                <th>Observaciones</th>
                {{-- <th>Usuarioconfirma Id</th> --}}
                {{-- <th>Especialidad Id</th> --}}
                {{-- <th>Seguro Id</th> --}}
                {{-- <th>Estado</th> --}}
                <th>Usuariocrea</th>
                {{-- <th>Usuariomod</th> --}}
                {{-- <th>Ip Creacion</th> --}}
                {{-- <th>Ip Modificacion</th> --}}
                <th>Observacion Proc</th>
                <th>Diagnostico Proc</th>
                <th colspan="3">&nbsp; Acciones &nbsp;</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agendas as $agenda)
            <tr>
                <td>{{ date('Y-m-d', strtotime($agenda->fechaini)) }} {{ $agenda->horaini }}</td>
                <td>{{ date('Y-m-d', strtotime($agenda->fechafin)) }} {{ $agenda->horafin }}</td>
                <td>{{ $agenda->paciente->primernombre }}&nbsp;{{ $agenda->paciente->primerapellido }}</td>
                {{-- <td>{{ $agenda->medico_id }}</td> --}}
                <td>@if($agenda->proc_consul==1) Procedimiento  @elseif($agenda->proc_consul==2) Evoluciones @else Consulta @endif</td>
                {{-- <td>{{ $agenda->consultorio_id }}</td> --}}
                <td>{{ $agenda->procedimiento->nombre }}</td>
                <td>@if($agenda->tipo_cita==1) Primera vez @else Consecutivo @endif</td>
                {{-- <td>{{ $agenda->estado_cita }}</td> --}}
                <td>@if($agenda->estado_cita==0) Por confirmar  @elseif($agenda->estado_cita==1) Confirmado
                     @elseif($agenda->estado_cita==2)  Reagendado @elseif($agenda->estado_cita==3)  Suspendido @elseif($agenda->estado_cita==4) Admisionado @endif</td>
                {{-- <td>{{ $agenda->clinica_id }}</td> --}}
                <td>{{ $agenda->reagenda_id }}</td>
                <td>{{ $agenda->observaciones }}</td>
                {{-- <td>{{ $agenda->usuarioconfirma_id }}</td> --}}
                {{-- <td>{{ $agenda->especialidad_id }}</td> --}}
                {{-- <td>{{ $agenda->seguro_id }}</td> --}}
                {{-- <td>{{ $agenda->estado }}</td> --}}
                <td>{{ $agenda->usuariocrea->name }}</td>
                {{-- <td>{{ $agenda->usuariomod_id }}</td> --}}
                {{-- <td>{{ $agenda->ip_creacion }}</td> --}}
                {{-- <td>{{ $agenda->ip_modificacion }}</td> --}}
                <td>{{ $agenda->observacion_proc }}</td>
                <td>{{ $agenda->diagnostico_proc }}</td>
                <td>
                    {!! Form::open(['route' => ['agendas.destroy', $agenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fromOdonts.paciente',[$agenda->paciente_id]) }}" class='btn btn-primary btn-xs'><i class="pli-folder-with-document"></i></a>
                        <a href="{{ route('agendas.show', [$agenda->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('agendas.edit', [$agenda->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
