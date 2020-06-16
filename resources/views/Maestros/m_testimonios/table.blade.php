<div class="table-responsive">
    <table class="table" id="mTestimonios-table">
        <thead>
            <tr>
                {{-- <th>Clinica Id</th> --}}
                <th>Paciente</th>
                <th>Testimonio</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mTestimonios as $mTestimonio)
            <tr>
                {{-- <td>{{ $mTestimonio->clinica_id }}</td> --}}
            <td>{{ $mTestimonio->paciente->primernombre }} {{ $mTestimonio->paciente->primerapellido }}</td>
            <td>{{ $mTestimonio->testimonio }}</td>
            <td><img class="img-circle img-md" src="{{ $mTestimonio->image }}" alt="Foto"></td> 
                <td>
                    {!! Form::open(['route' => ['mTestimonios.destroy', $mTestimonio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mTestimonios.show', [$mTestimonio->id]) }}" class='btn btn-default btn-icon'><i class="pli-eye"></i></a>
                        <a href="{{ route('mTestimonios.edit', [$mTestimonio->id]) }}" class='btn btn-default btn-icon'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
