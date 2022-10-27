<?php
// gets all users
$allUsers = User::all();

// gets all purchases
$allPurchases = Pedido::all();

// gets all purchases from the last year
$allPurchasesLastYear = Pedido::whereYear('data', date('Y'))->get();

// gets all purchases from the last 30 days
$last30DaysPurchases = Pedido::where('data', '>=', date('Y-m-d', strtotime('-30 days')))->get();

// gets all purchases from the last 7 days
$last7DaysPurchases = Pedido::where('data', '>=', date('Y-m-d', strtotime('-7 days')))->get();

// gets the top 5 selling categories
$top5SellingCategories = Pedido::selectRaw('tbcategoria.categoria, sum(tbpedido.quantidade) as quantidade')
    ->join('tbproduto', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
    ->join('tbcategoria', 'tbcategoria.idCategoria', '=', 'tbproduto.idCategoria')
    ->groupBy('tbcategoria.categoria')
    ->orderBy('quantidade', 'desc')
    ->limit(5)
    ->get();

// gets the top 5 selling products
$top5SellingProducts = Pedido::selectRaw('tbproduto.produto, sum(tbpedido.quantidade) as quantidade')
    ->join('tbproduto', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
    ->groupBy('tbproduto.produto')
    ->orderBy('quantidade', 'desc')
    ->limit(5)
    ->get();

// gets the top 5 selling users
$top5SellingUsers = Pedido::selectRaw('tbcliente.nome, sum(tbpedido.quantidade) as quantidade')
    ->join('tbcliente', 'tbcliente.idCliente', '=', 'tbpedido.idCliente')
    ->groupBy('tbcliente.nome')
    ->orderBy('quantidade', 'desc')
    ->limit(5)
    ->get();

// gets the top 5 selling products by category
$top5SellingProductsByCategory = Pedido::selectRaw('tbcategoria.categoria, tbproduto.produto, sum(tbpedido.quantidade) as quantidade')
    ->join('tbproduto', 'tbproduto.idProduto', '=', 'tbpedido.idProduto')
    ->join('tbcategoria', 'tbcategoria.idCategoria', '=', 'tbproduto.idCategoria')
    ->groupBy('tbcategoria.categoria', 'tbproduto.produto')
    ->orderBy('quantidade', 'desc')
    ->limit(5)
    ->get();



return view('dashboard', compact('allUsers', 'allPurchases', 'allPurchasesLastYear', 'last30DaysPurchases', 'last7DaysPurchases', 'top5SellingCategories', 'top5SellingProducts', 'top5SellingUsers', 'top5SellingProductsByCategory'));
