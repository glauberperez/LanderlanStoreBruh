<?php

namespace App\Http\Controllers;

use App\Models\Pedido as ModelsPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
        $temp = ModelsPedido::paginate(10);

        return view('pedido', compact('temp'), [
            'users' => DB::table('tbpedido')->paginate(15)
        ]);
    }

    // Generate PDF
    public function createPDF()
    {
        // retrieve all records from db
        $data = ModelsPedido::all();
        $data = (array) $data;
        $temp = ModelsPedido::paginate(10);
        // share data to view
        view()->share('pedido', $data);
        $pdf = PDF::loadView('pedido', compact('temp', 'data'))->setOptions(['defaultFont' => 'sans-serif']);


        // download PDF file with download method
        return $pdf->download('relatorio_pedidos.pdf');
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
     *'
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
        $update = $this->pedidos->where(['id' => $id])->update([
            "idProduto" => $request->idProduto,
            "idCategoria" => $request->idCategoria,
            "idCliente" => $request->idCliente,
            "descricao" => $request->descricao,
            "valor" => $request->valor,
            "data" => $request->data,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ModelsPedido::where('idPedido', $id)->delete();

        if ($destroy) {
            return redirect()->route('pedido.index');
        }
    }
}
