<div class="table-responsive">
    <table class="table" id="mConsultorios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Clinica Id</th>
        <th>Observacion</th>
        {{-- <th>Estado</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mConsultorios as $mConsultorio)
            <tr>
                <td>{{ $mConsultorio->nombre }}</td>
            <td>{{ $mConsultorio->clinica_id }}</td>
            <td>{{ $mConsultorio->observacion }}</td>
            {{-- <td>{{ $mConsultorio->estado }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['mConsultorios.destroy', $mConsultorio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mConsultorios.show', [$mConsultorio->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mConsultorios.edit', [$mConsultorio->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
