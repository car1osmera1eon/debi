<div class="table-responsive">
    <table class="table" id="perfilaccions-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Perfil</th>
                <th>Accion</th>
                <th>Modulo</th>
                <th>Submodulo</th>
                <th>Submodulo2</th> 
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfilaccions as $perfilaccion)
            <tr>
                <td>{{ $perfilaccion->perfil_id }}</td>
                <td>{{ $perfilaccion->perfil->nom_perfil }}</td>
                <td>{{ $perfilaccion->accion->nom_accion }}</td>
                <td>{{ $perfilaccion->modulo->nom_modulo }}</td>
                <td>{{ $perfilaccion->submodulo->nom_submodulo }}</td>
                <td>@isset($perfilaccion->submodulo2->nom_submodulo2) {{ $perfilaccion->submodulo2->nom_submodulo2 }} @endisset</td> 
                <td>
                    {!! Form::open(['route' => ['perfilaccions.destroy', $perfilaccion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfilaccions.show', [$perfilaccion->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('perfilaccions.edit', [$perfilaccion->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
