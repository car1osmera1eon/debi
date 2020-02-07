<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    //
    public function index()
    {
//        $products = Product::orderBy('id', 'DESC')->paginate();
        $products = Product::where('estado', '!=', 'E')
            ->orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        try{
            $product = Product::find($id);
            return view('products.show', compact('product'));
        } catch (Exception $ex) {
            return response()->json(['message' => 'Error: '.$ex]);
        }
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }


    public function create()
    {
        return view('products.create');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->with('info', 'El producto fue eliminado ');
    }

    public function store(ProductRequest $request)
    {
        $obj = new Product;
        $obj->name = trim($request->name);
        $obj->short = trim($request->short);
        $obj->save();
        return redirect()->route('products.index')
            ->with('info', 'El producto fue guardado');
    }

    public function update(ProductRequest $request, $id)
    {
        $obj= Product::find($id);
        $obj->name = trim($request->name);
        $obj->short = trim($request->short);
        $obj->save();
        return redirect()->route('products.index')
            ->with('info', 'El producto fue actualizado');
    }
    
    
    ## test

   /* public function consulta(Request $request)
    {
        try{
            $product = Product::find($request->id_product);
            $message= "El registro fue consultado con exito";
            return response()->json([
                'msg'=>$message,
                'obj'=>$product,
            ]);
        } catch (Exception $ex) {
            return response()->json(['message' => 'Error: '.$ex]);
        }

    }*/

    /*public function store(Request $request)
    {
        try{
            if($request->txt_id_product==""){
                $obj = new Product;
                $obj->name = trim($request->txt_name);
                $obj->short = trim($request->txt_short);
                $obj->save();
                $message= "El registro fue ingresado con exito";
            }else{
                $obj= Product::find($request->txt_id_product);
                $obj->name = trim($request->txt_name);
                $obj->short = trim($request->txt_short);
                $obj->save();
                $message= "El registro fue modificado con exito";
            }
            return response()->json([
                'msg'=>$message,
                'obj'=>$obj,
            ]);
        } catch (Exception $ex) {
            return response()->json(['msg' => 'Error: '.$ex]);
        }
    }*/

    /*public function remove(Request $request)
    {
        try{
            if($request->id_product!=""){
                $obj= Product::find($request->id_product);
                $obj->estado = "E";
                $obj->save();
            }

            $message= "El registro fue eliminado con exito";
            return response()->json([
                'msg'=>$message,
            ]);
        } catch (Exception $ex) {
            return response()->json(['message' => 'Error: '.$ex]);
        }
    }*/
}
