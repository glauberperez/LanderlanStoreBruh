<?php

namespace App\Http\Controllers;

use App\Models\Pedido as ModelsPedido;
use Illuminate\Http\Request;
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
        $temp = $this->pedidos->all();

        return view('pedido', compact('temp'));
    }

      // Generate PDF
      public function createPDF() {
        // retreive all records from db
        $data = ModelsPedido::all();
        // share data to view
        view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
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
