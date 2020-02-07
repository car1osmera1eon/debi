<div class="table-responsive">
    <table class="table" id="permisos-table">
        <thead>
            <tr>
                <th>Perfil </th>
                <th>Usuario </th>
                {{-- <th>Estado</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permisos as $permisos)
            <tr>
            <td>{{ $nom_perfils[$permisos->perfil_id] }}</td>
            <td>{{ $permisos->usuario->name }}</td>
            {{-- <td>{{ $permisos->estado }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['permisos.destroy', $permisos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permisos.show', [$permisos->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('permisos.edit', [$permisos->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
