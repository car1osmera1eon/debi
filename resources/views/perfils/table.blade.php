<div class="table-responsive">
    <table class="table" id="perfils-table">
        <thead>
            <tr>
                <th>Sistema</th>
                <th>Nom Perfil</th> 
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfils as $perfil)
            <tr>
                <td>{{ $perfil->sistema->nom_sistema }}</td>
                <td>{{ $perfil->nom_perfil }}</td> 
                <td>
                    {!! Form::open(['route' => ['perfils.destroy', $perfil->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfils.show', [$perfil->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('perfils.edit', [$perfil->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro desea eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
