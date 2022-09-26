<?php

namespace App\Http\Controllers;

use App\Models\Categoria as ModelsCategoria;
use Illuminate\Http\Request;

class Categoria extends Controller
{

    private $categoria;
    

    public function __construct()
    {
        $this->categoria = new ModelsCategoria();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temp = $this->categoria->all();

        return view('categoria', compact('temp'));
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
        $store = $this->categoria->create([
            'categoria' => $request->categoryName
        ]); 

        if ($store) {
            return redirect()->route('categoria.index');
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
        $update = $this->categoria->where('id', $id)->update([
            'categoria' => $request->categoryName
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
        $delete = $this->categoria->destroy($id);

        if ($delete) {
            return redirect()->route('categoria.index');
        }
    }
}
