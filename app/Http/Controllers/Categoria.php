<?php

namespace App\Http\Controllers;

use App\Models\Categoria as ModelsCategoria;
use App\Models\Produto;
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
        $temp = $this->categoria->find($id);
        $produtos = Produto::where('categoria_id', $id)->get();

        return view('categoriaShow', compact('temp', 'produtos'));
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
            'categoria' => $request->categoria
        ]);

        if ($update) {
            return redirect()->route('categoria.index');
        }

        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$delete = $this->categoria->destroy($id);
        $produtos = Produto::where('idCategoria', $id)->delete();

        $delete = ModelsCategoria::where('idCategoria', $id)->delete();

        if ($delete) {
            return redirect()->route('categoria.index');
        }
    }

    public function search(Request $request)
    {
        $search = $request->except('_token');

        $temp = $this->categoria->where('categoria', 'LIKE', "%{$request->search}%")->get();

        return view('categoria', compact('temp', 'search'));
    }

    // APIs
    public function getAllCategories()
    {
        $temp = $this->categoria->all();

        return response()->json($temp);
    }

    public function getCategoryById($id)
    {
        $temp = $this->categoria->where('idCategoria', $id)->get();

        return response()->json($temp);
    }

    public function getCategorieByCategoryName($categoryName)
    {
        $temp = $this->categoria->where('categoria', $categoryName)->get();

        return response()->json($temp);
    }

    public function getCategoriesTotal()
    {
        $temp = $this->categoria->count();

        return response()->json($temp);
    }
}
