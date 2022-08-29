<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="icon" href="data:image/png;base64,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">

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
        <li><a class="dropdown-item" href="#">Bem vindo, esperamos que você nos dê muito dinheiro!</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">LanderLan, bruh</a></li>
      </ul>
    </div>
  </div>
  
  
    
    <div class="centered">
        @yield('content')
    </div>

<!-- Footer -->
<footer class="text-center font-weight-bold text-white-start text-muted bah">
  <div class="text-white font-weight-bold text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
     © 6969 Copyright:
    <a class="fw-bol1d text-white font-weight-bold" href="https://www.gsuplementos.com.br/?gclid=Cj0KCQjw0oyYBhDGARIsAMZEuMsI_sjA89nFx8_arcpUWN2nCLyUZ9wUtW8zK603_UOafSV0jemIeN0aAnQuEALw_wcB">Durateston.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>