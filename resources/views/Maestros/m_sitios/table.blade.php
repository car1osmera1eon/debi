<div class="table-responsive">
    <table class="table" id="mSitios-table">
        <thead>
            <tr>
                <th>Clinica Id</th>
        <th>Nombre Sitio</th>
        <th>Mision</th>
        <th>Vision</th>
        <th>Quienes Somos</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Instagram</th>
        <th>Telegram</th>
        <th>Whatsapp</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mSitios as $mSitio)
            <tr>
                <td>{{ $mSitio->clinica_id }}</td>
            <td>{{ $mSitio->nombre_sitio }}</td>
            <td>{{ $mSitio->mision }}</td>
            <td>{{ $mSitio->vision }}</td>
            <td>{{ $mSitio->quienes_somos }}</td>
            <td>{{ $mSitio->facebook }}</td>
            <td>{{ $mSitio->twitter }}</td>
            <td>{{ $mSitio->instagram }}</td>
            <td>{{ $mSitio->telegram }}</td>
            <td>{{ $mSitio->whatsapp }}</td>
            <td><img class="img-circle img-md" src="{{ $mSitio->image }}" alt="Banner"></td> 
                <td>
                    {!! Form::open(['route' => ['mSitios.destroy', $mSitio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mSitios.show', [$mSitio->id]) }}" class='btn btn-default btn-icon'><i class="pli-eye"></i></a>
                        <a href="{{ route('mSitios.edit', [$mSitio->id]) }}" class='btn btn-default btn-icon'><i class="pli-file-edit"></i></a>
                        {{-- {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
