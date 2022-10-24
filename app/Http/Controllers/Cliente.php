<?php

namespace App\Http\Controllers;

use App\Models\Cliente as ModelsCliente;
use Illuminate\Http\Request;
use App\Models\Pedido as ModelsPedido;

class Cliente extends Controller
{
    private $cliente;
    public function __construct()
    {
        $this->cliente = new ModelsCliente();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temp = $this->cliente->all();

        return view('cliente', compact('temp'));
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
        $store = $this->cliente->create([
            "nome" => $request->nome,
            "dtNasc" => $request->dtNasc,
            "estadoCivil" => $request->estadoCivil,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "complemento" => $request->complemento,
            "cep" => $request->cep,
            "cidade" => $request->cidade,
            "estado" => $request->estado,
            "rg" => $request->rg,
            "cpf" => $request->cpf,
            "email" => $request->email,
            "fone" => $request->fone,
            "celular" => $request->celular,
        ]);

        if ($store) {
            return redirect()->route('cliente.index');
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
        //
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
        $update = $this->cliente->where(['id' => $id])->update([
            "nome" => $request->nome,
            "dtNasc" => $request->dtNasc,
            "estadoCivil" => $request->estadoCivil,
            "endereco" => $request->endereco,
            "numero" => $request->numero,
            "complemento" => $request->complemento,
            "cep" => $request->cep,
            "cidade" => $request->cidade,
            "estado" => $request->estado,
            "rg" => $request->rg,
            "cpf" => $request->cpf,
            "email" => $request->email,
            "fone" => $request->fone,
            "celular" => $request->celular,
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
        $pedidos = ModelsPedido::where('idCliente', $id)->delete();

        $delete = ModelsCliente::where('idCliente', $id)->delete();

        if ($delete) {
            return redirect()->route('cliente.index');
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $temp = $this->cliente->where('nome', 'like', "%{$search}%")->get();

        return view('cliente', compact('temp'));
    }
}
