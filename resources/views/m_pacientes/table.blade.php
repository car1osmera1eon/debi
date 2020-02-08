<div class="table-responsive">
    <table class="table" id="mPacientes-table">
        <thead>
            <tr>
                <th>Id</th> 
                <th>Cedula</th> 
                <th>Nombres</th> 
                <th>Fecha Nacimiento</th> 
                <th>Sexo</th> 
                <th>Telefono</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mPacientes as $mPaciente)
            <tr>
            <td>{{ $mPaciente->id }}</td> 
            <td>{{ $mPaciente->cedula }}</td> 
            <td>{{ $mPaciente->primernombre }} {{ $mPaciente->primerapellido }} {{ $mPaciente->segundoapellido }}</td>  
            <td>{{ $mPaciente->fecha_nacimiento }}</td> 
            <td>@if($mPaciente->sexo==1){{ 'Hombre' }} @else 'Mujer' @endif </td>  
            <td>{{ $mPaciente->telefono }}</td>
            <td>{{ $mPaciente->email }}</td>
                <td>
                    {!! Form::open(['route' => ['mPacientes.destroy', $mPaciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mPacientes.show', [$mPaciente->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mPacientes.edit', [$mPaciente->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
