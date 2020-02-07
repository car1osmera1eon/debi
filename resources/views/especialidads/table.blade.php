<div class="table-responsive">
    <table class="table" id="especialidads-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($especialidads as $especialidad)
            <tr>
                <td>{{ $especialidad->nombre }}</td>
                <td>{{ $especialidad->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['especialidads.destroy', $especialidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('especialidads.show', [$especialidad->id]) }}" class='btn btn-default btn-icon'><i class="pli-eye"></i></a>
                        <a href="{{ route('especialidads.edit', [$especialidad->id]) }}" class='btn btn-default btn-icon'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon', 'onclick' => "return confirm('Seguro desea eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
