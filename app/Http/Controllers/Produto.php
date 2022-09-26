<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as ModelsProduto;

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
        $temp = $this->produto->all();

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
        $store = $this->produto->create([
            'idCategoria' => $request->idCategoria,
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
        $update = $this->produto->where('id', $id)->update([
            'produto' => $request->produto,
            'valor' => $request->valor,
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
        $destroy = $this->produto->destroy($id);

        if ($destroy) {
            return redirect()->route('produto.index');
        }
    }
}
