<div class="table-responsive">
    <table class="table" id="fromOdonts-table">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Motivo Consulta</th>
                <th>Fecha Consulta</th>
                <th>Agenda</th>
                <th>Fecha Agenda</th>
                <th>Estado</th>
                <th>Procedimiento</th>
                <th>Observación</th>
                <th>Diagnostico</th>
                <th>Observación del Proc.</th>
                {{-- <th>Motivo Consulta</th>
                <th>Enfer Probl Actual</th>
                <th>Ap Alergia Antibiotico</th>
                <th>Ap Alergia Anestecia</th>
                <th>Ap Vih</th>
                <th>Ap Tuberculosis</th>
                <th>Ap Asma</th>
                <th>Ap Diabetes</th>
                <th>Ap Hipertension</th>
                <th>Ap Enf Cardiaca</th>
                <th>Ap Otros</th>
                <th>Sv Presion Arterial</th>
                <th>Sv Frecuencia Cardiaca</th>
                <th>Sv Temperatura</th>
                <th>Sv Frecuencia Respiratoria</th>
                <th>Ese Labios</th>
                <th>Ese Mejilla</th>
                <th>Ese Maxilar Superior</th>
                <th>Ese Maxilar Inferior</th>
                <th>Ese Lengua</th>
                <th>Ese Paladar</th>
                <th>Ese Piso</th>
                <th>Ese Orofaringe</th>
                <th>Ese Carrillos</th>
                <th>Ese Gland Salivales</th>
                <th>Ese Oro Faringe</th>
                <th>Ese Atm</th>
                <th>Ese Ganglios</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fromOdonts as $fromOdont)
            <tr>
                <td>{{ $fromOdont->paciente->primernombre }} {{ $fromOdont->paciente->primerapellido }} {{ $fromOdont->paciente->segundoapellido }}</td>
                <td>{{ $fromOdont->motivo_consulta  }}</td>
                <td>{{ date('Y-m-d', strtotime($fromOdont->created_at)) }}</td>
                <td>{{ $fromOdont->agenda_id }}</td>
                <td>{{ date('Y-m-d', strtotime($fromOdont->agenda->fechaini)) }}</td>
                <td>@if($fromOdont->agenda->estado_cita==0) Por confirmar  @elseif($fromOdont->agenda->estado_cita==1) Confirmado
                    @elseif($fromOdont->agenda->estado_cita==2)  RefromOdont->agendado @elseif($fromOdont->agenda->estado_cita==3)  Suspendido @elseif($fromOdont->agenda->estado_cita==4) Admisionado @endif</td>
                <td>{{ $fromOdont->agenda->procedimiento->nombre }}</td>
                <td>{{ $fromOdont->agenda->observaciones  }}</td>
                <td>{{ $fromOdont->agenda->diagnostico_proc }}</td>
                <td>{{ $fromOdont->agenda->observacion_proc }}</td>
                {{-- <td>{{ $fromOdont->motivo_consulta }}</td>
                <td>{{ $fromOdont->enfer_probl_actual }}</td>
                <td>{{ $fromOdont->ap_alergia_antibiotico }}</td>
                <td>{{ $fromOdont->ap_alergia_anestecia }}</td>
                <td>{{ $fromOdont->ap_vih }}</td>
                <td>{{ $fromOdont->ap_tuberculosis }}</td>
                <td>{{ $fromOdont->ap_asma }}</td>
                <td>{{ $fromOdont->ap_diabetes }}</td>
                <td>{{ $fromOdont->ap_hipertension }}</td>
                <td>{{ $fromOdont->ap_enf_cardiaca }}</td>
                <td>{{ $fromOdont->ap_otros }}</td>
                <td>{{ $fromOdont->sv_presion_arterial }}</td>
                <td>{{ $fromOdont->sv_frecuencia_cardiaca }}</td>
                <td>{{ $fromOdont->sv_temperatura }}</td>
                <td>{{ $fromOdont->sv_frecuencia_respiratoria }}</td>
                <td>{{ $fromOdont->ese_labios }}</td>
                <td>{{ $fromOdont->ese_mejilla }}</td>
                <td>{{ $fromOdont->ese_maxilar_superior }}</td>
                <td>{{ $fromOdont->ese_maxilar_inferior }}</td>
                <td>{{ $fromOdont->ese_lengua }}</td>
                <td>{{ $fromOdont->ese_paladar }}</td>
                <td>{{ $fromOdont->ese_piso }}</td>
                <td>{{ $fromOdont->ese_orofaringe }}</td>
                <td>{{ $fromOdont->ese_carrillos }}</td>
                <td>{{ $fromOdont->ese_gland_salivales }}</td>
                <td>{{ $fromOdont->ese_oro_faringe }}</td>
                <td>{{ $fromOdont->ese_atm }}</td>
                <td>{{ $fromOdont->ese_ganglios }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['fromOdonts.destroy', $fromOdont->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fromOdonts.show', [$fromOdont->id]) }}" class='btn btn-primary btn-icon' title="Ver"><i class="pli-eye"></i></a>
                        <a href="{{ route('fromOdonts.edit', [$fromOdont->id]) }}" class='btn btn-default btn-icon' title="Editar"><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon', 'title'=>"Borrar", 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
