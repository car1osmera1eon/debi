<div class="table-responsive">
    <table class="table" id="horarioMedicos-table">
        <thead>
            <tr>
                <th>Medico Id</th>
        <th>Ndia</th>
        <th>Dia</th>
        <th>Hora Ini</th>
        <th>Hora Fin</th>
        <th>Estado</th>
        <th>Id Usuariocrea</th>
        <th>Id Usuariomod</th>
        <th>Ip Creacion</th>
        <th>Ip Modificacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($horarioMedicos as $horarioMedico)
            <tr>
                <td>{{ $horarioMedico->medico_id }}</td>
            <td>{{ $horarioMedico->ndia }}</td>
            <td>{{ $horarioMedico->dia }}</td>
            <td>{{ $horarioMedico->hora_ini }}</td>
            <td>{{ $horarioMedico->hora_fin }}</td>
            <td>{{ $horarioMedico->estado }}</td>
            <td>{{ $horarioMedico->id_usuariocrea }}</td>
            <td>{{ $horarioMedico->id_usuariomod }}</td>
            <td>{{ $horarioMedico->ip_creacion }}</td>
            <td>{{ $horarioMedico->ip_modificacion }}</td>
                <td>
                    {!! Form::open(['route' => ['horarioMedicos.destroy', $horarioMedico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('horarioMedicos.show', [$horarioMedico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('horarioMedicos.edit', [$horarioMedico->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
