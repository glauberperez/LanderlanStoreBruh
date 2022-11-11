@extends('template.default')

@section('content')

<div class="stuff">
  <table class="table table-light table-striped">

    <thead class="table table-primary">
      <tr>
        <th scope="col">idCliente</th>
        <th scope="col">nome</th>
        <th scope="col">dtNasc </th>
        <th scope="col">estadoCivil</th>
        <th scope="col">endereco</th>
        <th scope="col">cep</th>
        <th scope="col">numero</th>
        <th scope="col">complemento</th>
        <th scope="col">cidade</th>
        <th scope="col">estado</th>
        <th scope="col">rg</th>
        <th scope="col">cpf</th>
        <th scope="col">email</th>
        <th scope="col">fone</th>
        <th scope="col"><i title="Adicionar" class="fa-solid fa-plus" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></th>
      </tr>

    </thead>
    <tbody>
      @foreach($temp as $cliente)
      <tr>
        <th scope="row">{{ $cliente->idCliente }}</th>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->dtNasc }}</td>
        <td>{{ $cliente->estadoCivil }}</td>
        <td>{{ $cliente->endereco }}</td>
        <td>{{ $cliente->cep }}</td>
        <td>{{ $cliente->numero }}</td>
        <td>{{ $cliente->complemento }}</td>
        <td>{{ $cliente->cidade }}</td>
        <td>{{ $cliente->estado }}</td>
        <td>{{ $cliente->rg }}</td>
        <td>{{ $cliente->cpf }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->fone }}</td>
        <td>
          <a href=""><i title="Editar" class="fa-solid fa-pen-to-square"></i></a> <!-- fazer o modaizolas -->
          <a href="/cliente/d/{{ $cliente->idCliente }}"><i title="Excluir" class="fa-solid fa-trash"></i></a>
        </td>
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
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('cliente.store') }}" enctype="multipart/form-data" class="black-text">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="nome" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Data de nascimento</label>
              <input type="date" class="form-control" id="birthday" name="dtNasc" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" maxlength="40" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Estado Civil</label>
              <input type="text" class="form-control" id="status" name="estadoCivil" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Celular</label>
              <input type="text" class="form-control" id="cellphone" maxlength="16" name="celular" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Telefone</label>
              <input type="text" class="form-control" id="phone" name="fone" maxlength="16" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">CEP</label>
              <input type="text" class="form-control" data-mask='cep' id="cep" name="cep" aria-describedby="emailHelp" size="10" maxlength="9" onblur="pesquisacep(this.value);">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Estado</label>
              <input type="text" class="form-control" id="state" name="estado" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="city" name="cidade" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Numero</label>
              <input type="text" class="form-control" id="number" name="numero" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" name="endereco" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Complemento</label>
              <input type="text" class="form-control" id="complement" name="complemento" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Adicionar Cliente</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->
  <!--
<div class="center-center">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Cadastrar
  </button>
</div>
-->

  <div class="d-flex justify-content-center">
    {!! $temp->appends(['sort' => 'categoria'])->links() !!}
  </div>

</div>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/validarCep.js') }}"></script>
<script>
  $(document).ready(($) => {
    $("#fone").mask("(00) 0000-00000");
    $("#cep").mask("00000-000");
    $("#rg").mask("000.000.000-X");
    $("#cpf").mask("000.000.000-00");
  });
</script>

@endsection