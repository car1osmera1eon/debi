<div class="table-responsive">
    <table class="table" id="mClinicas-table">
        <thead>
            <tr>
                <th>Ruc</th>
                <th>Razón social</th>
                <th>Nombre comercial</th>
                <th>Nombre corto</th>
                <th>Provincia</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Telefono1</th>
                <th>Telefono2</th>
                <th>Logo</th>
                {{-- <th>Estado</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mClinicas as $mClinica)
            <tr>
                <td>{{ $mClinica->ruc }}</td>
                <td>{{ $mClinica->razonsocial }}</td>
                <td>{{ $mClinica->nombrecomercial }}</td>
                <td>{{ $mClinica->nombre_corto }}</td>
                <td>{{ $mClinica->provincia->nombre_m_provincia }}</td>
                <td>{{ $mClinica->direccion }}</td>
                <td>{{ $mClinica->email }}</td>
                <td>{{ $mClinica->telefono1 }}</td>
                <td>{{ $mClinica->telefono2 }}</td> 
                <td><img class="img-circle img-md" src="{{ $mClinica->logo }}" alt="Logo"></td>
            {{-- <td>{{ $mClinica->estado }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['mClinicas.destroy', $mClinica->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mClinicas.show', [$mClinica->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mClinicas.edit', [$mClinica->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
