@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="../home"><i class="pli-home"></i></a></li>
    <li><a href="{{ redirect()->getUrlGenerator()->previous() }}">Horario Medico</a></li> 
    <li class="active">Crear</li>
</ol> 
@endsection