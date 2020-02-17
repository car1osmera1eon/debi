<div class="table-responsive">
    <table class="table" id="mCantons-table">
        <thead>
            <tr>
                <th>Codigo Provincia</th>
        <th>Codigo M Canton</th>
        <th>Nombre M Canton</th>
        <th>Codigo Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mCantons as $mCanton)
            <tr>
                <td>{{ $mCanton->codigo_provincia }}</td>
                <td>{{ $mCanton->codigo_m_canton }}</td>
                <td>{{ $mCanton->nombre_m_canton }}</td>
                <td>{{ $mCanton->codigo_nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['mCantons.destroy', $mCanton->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mCantons.show', [$mCanton->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mCantons.edit', [$mCanton->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
