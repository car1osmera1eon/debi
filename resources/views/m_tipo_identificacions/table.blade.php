<div class="table-responsive">
    <table class="table" id="mTipoIdentificacions-table">
        <thead>
            <tr>
                <th>Tipo Identificacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mTipoIdentificacions as $mTipoIdentificacion)
            <tr>
                <td>{{ $mTipoIdentificacion->tipo_identificacion }}</td>
                <td>
                    {!! Form::open(['route' => ['mTipoIdentificacions.destroy', $mTipoIdentificacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mTipoIdentificacions.show', [$mTipoIdentificacion->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mTipoIdentificacions.edit', [$mTipoIdentificacion->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
