<div class="table-responsive">
    <table class="table" id="mProcedimientos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Observacion</th>
                {{-- <th>Estado</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mProcedimientos as $mProcedimiento)
            <tr>
                <td>{{ $mProcedimiento->nombre }}</td>
            <td>{{ $mProcedimiento->observacion }}</td>
            {{-- <td>{{ $mProcedimiento->estado }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['mProcedimientos.destroy', $mProcedimiento->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mProcedimientos.show', [$mProcedimiento->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mProcedimientos.edit', [$mProcedimiento->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
