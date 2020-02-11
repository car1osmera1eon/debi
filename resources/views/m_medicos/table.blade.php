<div class="table-responsive">
    <table class="table" id="mMedicos-table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Especialidad</th>
                <th>Registro sanitario</th>
                <th>Registro medico</th>
                <th>Registro senecyt</th>
                {{-- <th>Estado</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mMedicos as $mMedico)
            <tr>
                <td>{{ $mMedico->usuario->name }}</td>
                <td>{{ $mMedico->especialidad->nombre }}</td>
                <td>{{ $mMedico->registrosanitario }}</td>
                <td>{{ $mMedico->registromedico }}</td>
                <td>{{ $mMedico->registrosenecyt }}</td>
                {{-- <td>{{ $mMedico->estado }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['mMedicos.destroy', $mMedico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mMedicos.show', [$mMedico->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mMedicos.edit', [$mMedico->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
