@extends('template.default')

@section('content')

<table>
  <!-- Cards -->
  <div class="row doidera-braba black-text">
    <div class="col-2">
      <div class="card cardard" style="width: 14rem;">
        <div class="card-body">
          <h5 class="card-title">Total de produtos</h5>
          <hr>
          <p class="card-text">{{ $produtos }}</p>
          <a href="/produto" class="btn btn-primary">Ver produtos</a>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card cardard" style="width: 14rem;">
        <div class="card-body">
          <h5 class="card-title">Total de categorias</h5>
          <hr>
          <p class="card-text">{{ $categorias }}</p>
          <a href="/categoria" class="btn btn-primary">Ver categorias</a>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card cardard" style="width: 14rem;">
        <div class="card-body">
          <h5 class="card-title">Total de pedidos</h5>
          <hr>
          <p class="card-text">{{ $pedidos }}</p>
          <a href="/pedido" class="btn btn-primary">Ver pedidos</a>
        </div>
      </div>
      <div class="col-2">
        <div class="card cardard" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Total de clientes</h5>
            <hr>
            <p class="card-text">{{ $clientes }}</p>
            <a href="/cliente" class="btn btn-primary">Ver clientes</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Gráficos -->
    <tr>
      <td>
        <canvas id=" clientes_chart" style="width: 700px; height: 400px;"></canvas>
      </td>
      <td>
        <canvas id="categories_chart" style="width: 400px; height: 400px;"></canvas>
      </td>
    </tr>
    <tr>
      <td>
        <canvas id="produtos_chart" style="width: 400px; height: 400px;"></canvas>
      </td>
    </tr>
    <tr>
      <td>
        <canvas id="pedidos_chart" style="width: 400px; height: 400px;"></canvas>
      </td>
    </tr>
</table>

<script src="{{ asset('js/dashboard.js') }}">
</script>

@endsection