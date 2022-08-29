@extends('template.default')

@section('content')

<table class="table table-light table-striped">
  <thead class="table table-primary">
    <tr>
      <th scope="col">idPedido</th>
      <th scope="col">idProduto</th>
      <th scope="col">idCategoria</th>
      <th scope="col">idCliente</th>
      <th scope="col">descricao</th>
      <th scope="col">valor</th>
      <th scope="col">data</th>
      <th scope="col"><i title="Adicionar" class="fa-solid fa-plus" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach($temp as $pedido) 
    <tr>
      <th scope="row">{{ $pedido->idPedido }}</th>
      <td>{{ $pedido->idProduto }}</td>
      <td>{{ $pedido->idCategoria }}</td>
      <td>{{ $pedido->idCliente }}</td>
      <td>{{ $pedido->descricao }}</td>
      <td>{{ $pedido->valor }}</td>
      <td>{{ $pedido->data }}</td>
      <td><i title="Editar" class="fa-solid fa-pen-to-square"></i></td>
    </tr>
    @endforeach
  </tbody>
  <!-- Button trigger modal -->
</table>



<!-- Modal -->
<div class="modal fade dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header black-text">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar pedido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="black-text">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">idProduto</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">idCategoria</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">idCliente</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">descricao</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">valor</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">data</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>


@endsection