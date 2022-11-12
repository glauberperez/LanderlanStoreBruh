<?php

namespace App\Http\Controllers;


use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /*
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all()->count();
        $produtos = Produto::all()->count();
        $clientes = Cliente::all()->count();
        $categorias = Categoria::all();

        return view('dashboard', compact('pedidos', 'produtos', 'clientes', 'categorias'));
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
        //
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

    public function getAllUsers(): JsonResponse
    {
        $users = Cliente::all()->count();

        return response()->json($users);
    }

    public function getAllPedidos(): JsonResponse
    {
        $pedidos = Pedido::all()->count();

        return response()->json($pedidos);
    }

    public function getAllPedidosLastYear(): JsonResponse
    {
        $pedidos = Pedido::whereYear('data', [date('Y'), strtotime('-365 days')])->count();

        return response()->json($pedidos);
    }

    public function getAllPedidosLastMonth(): JsonResponse
    {
        $pedidos = Pedido::whereMonth('data', [date('m'), strtotime('-30 days')])->count();

        return response()->json($pedidos);
    }

    public function getAllPedidosLastWeek(): JsonResponse
    {
        $pedidos = Pedido::whereBetween('data', [date('Y-m-d', strtotime('-7 days')), date('Y-m-d')])->count();

        return response()->json($pedidos);
    }

    public function getAllPedidosLastDay(): JsonResponse
    {
        $pedidos = Pedido::whereDate('data', [date('Y-m-d'), strtotime('-1 days')])->count();

        return response()->json($pedidos);
    }

    public function getTop5SellingCategories(): JsonResponse
    {
        $pedidos = Pedido::selectRaw('tbcategoria.categoria, sum(tbpedido.quantidade) as quantidade')
            ->join('tbproduto', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
            ->join('tbcategoria', 'tbcategoria.idCategoria', '=', 'tbproduto.idCategoria')
            ->groupBy('tbproduto.idCategoria', 'tbcategoria.categoria')
            ->orderBy('quantidade', 'desc')
            ->limit(5)
            ->get();

        return response()->json($pedidos);
    }

    public function getTop5SellingProducts(): JsonResponse
    {
        $pedidos = Pedido::selectRaw('tbproduto.idProduto, tbcategoria.categoria, tbproduto.produto, sum(tbpedido.quantidade) as quantidade')
            ->join('tbproduto', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
            ->join('tbcategoria', 'tbcategoria.idCategoria', '=', 'tbproduto.idCategoria')
            ->groupBy('tbproduto.idProduto', 'tbproduto.produto', 'tbcategoria.categoria')
            ->orderBy('quantidade', 'desc')
            ->limit(5)
            ->get();


        return response()->json($pedidos);
    }

    public function getTop5SellingUsers(): JsonResponse
    {
        $pedidos = Pedido::selectRaw('tbcliente.idCliente, tbcliente.nome, sum(tbpedido.quantidade) as quantidade')
            ->join('tbcliente', 'tbcliente.idCliente', '=', 'tbpedido.idCliente')
            ->groupBy('tbcliente.idCliente', 'tbcliente.nome')
            ->orderBy('quantidade', 'desc')
            ->limit(5)
            ->get();

        return response()->json($pedidos);
    }
}
