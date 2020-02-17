<div class="table-responsive">
    <table class="table" id="mCategorias-table">
        <thead>
            <tr>
                <th>Nom Categoria</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mCategorias as $mCategoria)
            <tr>
                <td>{{ $mCategoria->nom_categoria }}</td>
            <td>{{ $mCategoria->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['mCategorias.destroy', $mCategoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mCategorias.show', [$mCategoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mCategorias.edit', [$mCategoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
