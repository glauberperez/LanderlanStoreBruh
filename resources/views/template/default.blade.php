<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"> 

    <title>Landerlan</title>
</head>
<body class="daBody">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent navball">
  <a class="navbar-brand" href="#">Landerlan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cliente">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categoria">Categoria</a>
      </li>

    
      <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/categoria" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Proteína</a></li>
            <li><a class="dropdown-item" href="#">Aminoácido</a></li>
            <li><a class="dropdown-item" href="#">Carboidratos</a></li>
            <li><a class="dropdown-item" href="#">Vegetarianos</a></li>
            <li><a class="dropdown-item" href="#">Veganos</a></li>
            <li><a class="dropdown-item" href="#">Fitoterápicos</a></li>
            <li><a class="dropdown-item" href="#">Vitaminas</a></li>
            <li><a class="dropdown-item" href="#">Termogênicos</a></li>
          </ul>
      </li>
       -->


      <li class="nav-item">
        <a class="nav-link" href="/produto">Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pedido">Pedido</a>
      </li>
    </ul>
  </div>
</nav>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-transparent sidebar">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="/categoria" class="nav-link link-light">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Categoria
        </a>
      </li>
      <li>
        <a href="/produto" class="nav-link link-light">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Produto
        </a>
      </li>
      <li>
        <a href="/cliente" class="nav-link link-light">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Cliente
        </a>
      </li>
      <li>
        <a href="/pedido" class="nav-link link-light">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Pedido
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('img/theroca.jpg') }}" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>admin</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">Bem vindo!</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
  
  <div class="admin-title">
    <h1>Bem vindo, clique nos botões da sidebar para navegar entre as rotas</h1>
  </div>
    
    <div class="centered">
        @yield('content')
    </div>

<!-- Footer -->
<footer class="text-center font-weight-bold text-white-start text-muted bah">
  <div class="text-white font-weight-bold text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
     © 6969 Copyright:
    <a class="fw-bol1d text-white font-weight-bold" href="https://mdbootstrap.com/">Durateston.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>