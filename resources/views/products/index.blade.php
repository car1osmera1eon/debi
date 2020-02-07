@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de productos
            <a href="{{route('products.create')}}"class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('products.fragment.info')
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <a href="{{route('products.show', $product->id)}}" class="btn btn-link">VER</a> &nbsp;
                            {{--<a href="#" onclick="show({{$product->id}});">Ver</a>--}}
                        </td>
                        <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-link">EDITAR</a></td>
                        <td><form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-link">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('/products/consulta') }}" role="form" id="form" method="post">
                    {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title"><label id="lbl_name" id="lbl_name"><strong>NOMBRE DEL PRODUCTO</strong></label></h4>
                    <input type="hidden" id="id_product" name="id_product">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><label id="lbl_short" id="short">descripcion del producto</label></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: Modal -->


    <!-- Modal -->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('/products') }}" role="form" id="form_edit" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title"><label id="name" id="name"><strong>PRODUCTO</strong></label></h4>
                        <input type="hidden" id="txt_id_product" name="txt_id_product">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="txt_name" name="txt_name" aria-describedby="Name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Short:</label>
                            <input type="text" class="form-control" id="txt_short" name="txt_short" aria-describedby="Short" placeholder="Enter Short">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="store()">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: Modal -->

  {{--  <script type="text/javascript" src="{{ URL('js/products/show.js') }}" defer="defer" ></script>
    <script type="text/javascript" src="{{ URL('js/products/edit.js') }}" defer="defer" ></script>
--}}


@endsection
