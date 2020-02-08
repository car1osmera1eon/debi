<div class="table-responsive">
    <table class="table" id="mParroquias-table">
        <thead>
            <tr>
                <th>Codigo Canton</th>
        <th>Codigo M Parroquia</th>
        <th>Nombre M Parroquia</th>
        <th>Codigo Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mParroquias as $mParroquia)
            <tr>
                <td>{{ $mParroquia->codigo_canton }}</td>
            <td>{{ $mParroquia->codigo_m_parroquia }}</td>
            <td>{{ $mParroquia->nombre_m_parroquia }}</td>
            <td>{{ $mParroquia->codigo_nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['mParroquias.destroy', $mParroquia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mParroquias.show', [$mParroquia->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mParroquias.edit', [$mParroquia->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
