<div class="table-responsive">
    <table class="table" id="formOdonDiagPacis-table">
        <thead>
            <tr>
                <th>Form Odon Id</th>
        <th>Paciente Id</th>
        <th>Tipo Diag Id</th>
        <th>Diagnostico</th>
        <th>Usuariocrea Id</th>
        <th>Usuariomod Id</th>
        <th>Ip Creacion</th>
        <th>Ip Modificacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($formOdonDiagPacis as $formOdonDiagPaci)
            <tr>
                <td>{{ $formOdonDiagPaci->form_odon_id }}</td>
            <td>{{ $formOdonDiagPaci->paciente_id }}</td>
            <td>{{ $formOdonDiagPaci->tipo_diag_id }}</td>
            <td>{{ $formOdonDiagPaci->diagnostico }}</td>
            <td>{{ $formOdonDiagPaci->usuariocrea_id }}</td>
            <td>{{ $formOdonDiagPaci->usuariomod_id }}</td>
            <td>{{ $formOdonDiagPaci->ip_creacion }}</td>
            <td>{{ $formOdonDiagPaci->ip_modificacion }}</td>
                <td>
                    {!! Form::open(['route' => ['formOdonDiagPacis.destroy', $formOdonDiagPaci->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('formOdonDiagPacis.show', [$formOdonDiagPaci->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('formOdonDiagPacis.edit', [$formOdonDiagPaci->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
