<?php

namespace App\Http\Controllers;

use App\Models\Pedido as ModelsPedido;
use Illuminate\Http\Request;

class Pedido extends Controller
{
    private $pedidos;
    public function __construct()
    {
        $this->pedidos = new ModelsPedido();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temp = $this->pedidos->all();

        return view('pedido', compact('temp'));
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
        $store = $this->pedidos->create([
            "idProduto" => $request->idProduto,
            "idCategoria" => $request->idCategoria,
            "idCliente" => $request->idCliente,
            "descricao" => $request->descricao,
            "valor" => $request->valor,
            "data" => $request->data,
        ]);

        if ($store) {
            return redirect()->route('pedido.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
