<div class="table-responsive">
    <table class="table" id="mPais-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Name</th>
        <th>Nom</th>
        <th>Iso2</th>
        <th>Iso3</th>
        <th>Phone Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mPais as $mPais)
            <tr>
                <td>{{ $mPais->nombre }}</td>
            <td>{{ $mPais->name }}</td>
            <td>{{ $mPais->nom }}</td>
            <td>{{ $mPais->iso2 }}</td>
            <td>{{ $mPais->iso3 }}</td>
            <td>{{ $mPais->phone_code }}</td>
                <td>
                    {!! Form::open(['route' => ['mPais.destroy', $mPais->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mPais.show', [$mPais->id]) }}" class='btn btn-default btn-xs'><i class="pli-eye"></i></a>
                        <a href="{{ route('mPais.edit', [$mPais->id]) }}" class='btn btn-default btn-xs'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
