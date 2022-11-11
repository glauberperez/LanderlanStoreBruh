<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as ModelsProduto;
use App\Models\Pedido as ModelsPedido;
use Illuminate\Support\Facades\DB;

class Produto extends Controller
{
    private $produto;
    public function __construct()
    {
        $this->produto = new ModelsProduto();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$temp = $this->produto->all();

        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->get();


        return view('produto', compact('temp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = "";

        if ($request->hasFile("foto") && $request->file("foto")->isValid()) {
            $requestImage = $request->foto;

            if ($requestImage) {

                $extension = $requestImage->extension();

                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $request->foto->move(public_path('img/produtos'), $imageName);
            } else {
                $extension = $requestImage->extension();

                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $request->foto->move(public_path('img/produtos'), 'sunglasses.jpg');
            }
        }

        $store = $this->produto->create([
            'idCategoria' => $request->idCategoria,
            'foto' => $imageName,
            'produto' => $request->produto,
            'valor' => $request->valor,
        ]);

        if ($store) {
            return redirect()->route('produto.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        dd($request);

        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.' . $request->idCategoria)
            ->get();


        return view('produto', compact('temp', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = $this->produto->where('id', $id)->update([
            'produto' => $request->produto,
            'valor' => $request->valor,
        ]);

        if ($update) {
            return redirect()->route('produto.index');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = ModelsPedido::where('idProduto', $id)->delete();

        $destroy = ModelsProduto::where('idProduto', $id)->delete();

        if ($destroy && $pedido) {
            return redirect()->route('produto.index');
        }

        return redirect()->route('produto.index');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbproduto.produto', 'like', "%{$search}%")
            ->get();

        return view('produto', compact('temp'));
    }

    public function filter(Request $request)
    {
        $filter = $request->filter;

        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbcategoria.idCategoria', '=', $filter)
            ->get();

        return response()->json($temp);
    }

    public function order(Request $request)
    {
        $order = $request->order;

        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->orderBy('tbproduto.valor', $order)
            ->get();

        return response()->json($temp);
    }

    public function getAllProducts()
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->get();

        return response()->json($temp);
    }

    public function getProductsByCategory($id)
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbcategoria.idCategoria', '=', $id)
            ->get();

        return response()->json($temp);
    }

    public function getProductById($id)
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbproduto.idProduto', '=', $id)
            ->get();

        return response()->json($temp);
    }

    public function getProductByName($name)
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbproduto.produto', 'like', "%{$name}%")
            ->get();

        return response()->json($temp);
    }

    public function getProductByPrice($price)
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->where('tbproduto.valor', '=', $price)
            ->get();

        return response()->json($temp);
    }

    public function getProductByPriceRange($min, $max)
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->whereBetween('tbproduto.valor', [$min, $max])
            ->get();

        return response()->json($temp);
    }

    public function getProductsTotal()
    {
        $temp = ModelsProduto::select('tbproduto.produto', 'tbproduto.idProduto', 'tbproduto.foto', 'tbproduto.valor', 'tbcategoria.categoria')
            ->join('tbcategoria', 'tbproduto.idCategoria', '=', 'tbcategoria.idCategoria')
            ->count();

        return response()->json($temp);
    }
}
