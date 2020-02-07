<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
            <th>Identificacion</th> 
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th> 
            <th>Imagen</th> 
            <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->identificacion }}</td> 
            <td>{{ $usuario->primernombre }}</td>
            <td>{{ $usuario->segundonombre }}</td>
            <td>{{ $usuario->primerapellido }}</td>
            <td>{{ $usuario->segundoapellido }}</td>
            <td>{{ $usuario->email }}</td> 
            <td><img class="img-circle img-md" src="{{ $usuario->image }}" alt="Profile Picture"></td> 
            
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
