<div class="table-responsive">
    <table class="table" id="mProvincias-table">
        <thead>
            <tr>
                <th>Codigo M Provincia</th>
        <th>Nombre M Provincia</th>
        <th>Codigo Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mProvincias as $mProvincia)
            <tr>
                <td>{{ $mProvincia->codigo_m_provincia }}</td>
            <td>{{ $mProvincia->nombre_m_provincia }}</td>
            <td>{{ $mProvincia->codigo_nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['mProvincias.destroy', $mProvincia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mProvincias.show', [$mProvincia->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mProvincias.edit', [$mProvincia->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
