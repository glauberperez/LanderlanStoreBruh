@extends('template.default')

@section('content')

<table class="table table-light table-striped">
  <thead class="table table-dark">
    <tr>
      <th scope="col">idCliente</th>
      <th scope="col">nome</th>
      <th scope="col">dtNasc</th>
      <th scope="col">estadoCivil</th>
      <th scope="col">enderecos</th>
      <th scope="col">numero</th>
      <th scope="col">complemento</th>
      <th scope="col">cep</th>
      <th scope="col">cidade</th>
      <th scope="col">estado</th>
      <th scope="col">rg</th>
      <th scope="col">cpf</th>
      <th scope="col">email</th>
      <th scope="col">fone</th>
      <th scope="col">celular</th>
    </tr>
  </thead>
  <tbody>
    @foreach($temp as $categoria)
      <tr>
        <th scope="row">{{ $categoria->idCategoria }}</th>
        <td>{{ $categoria->categoria }}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="black-text">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<div class="center-center">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Cadastrar
  </button>
</div>

@endsection