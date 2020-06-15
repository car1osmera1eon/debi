<div class="table-responsive">
    <table class="table" id="mBanners-table">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mBanners as $mBanner)
            <tr>
                <td>{{ $mBanner->descripcion }}</td>
                <td><img class="img-circle img-md" src="{{ $mBanner->image }}" alt="Banner"></td> 
                <td>
                    {!! Form::open(['route' => ['mBanners.destroy', $mBanner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mBanners.show', [$mBanner->id]) }}" class='btn btn-default btn-icon'><i class="pli-eye"></i></a>
                        <a href="{{ route('mBanners.edit', [$mBanner->id]) }}" class='btn btn-default btn-icon'><i class="pli-file-edit"></i></a>
                        {!! Form::button('<i class="pli-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-icon', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
