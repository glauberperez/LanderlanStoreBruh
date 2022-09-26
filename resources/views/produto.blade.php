@extends('template.default')

@section('content')

<table class="table table-light table-striped">
  <thead class="table table-primary">
    <tr>
      <th scope="col">idProduto</th>
      <th scope="col">idCategoria</th>
      <th scope="col">valor</th>
      <th scope="col">produto</th>
      <th scope="col"><i title="Adicionar" class="fa-solid fa-plus" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach($temp as $produto) 
    <tr>
      <th scope="row">{{ $produto->idProduto }}</th>
      <td>{{ $produto->idCategoria }}</td>
      <td>{{ $produto->valor }}</td>
      <td>{{ $produto->produto }}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('produto.store') }}" method="POST" enctype="multipart/form-data" class="black-text">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">idCategoria</label>
          <input type="text" class="form-control" id="idCategoria" name="idCategoria" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">produto</label>
          <input type="text" class="form-control" id="produto" name="produto" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">valor</label>
          <input type="text" class="form-control" id="valor" name="valor" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script> 
/*   $(document).ready(() => {
    window.alert('bah')
  }) */
</script>

<!-- Button trigger modal -->
<!--
<div class="center-center">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Cadastrar
  </button>
</div>
-->


@endsection