@extends('template.default')

@section('content')

<div class="stuff">
  <table class="table table-light table-striped">
    <thead class="table table-primary">
      <tr>
        <th scope="col">idCategoria</th>
        <th scope="col">categoria</th>
        <th scope="col"><i title="Adicionar" class="fa-solid fa-plus" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal"></i></th>
        <!-- Button trigger modal -->
      </tr>
    </thead>
    <tbody>
      @foreach($temp as $categoria)
      <tr>
        <th scope="row">{{ $categoria->idCategoria }}</th>
        <td>{{ $categoria->categoria }}</td>
        <td>
          <a href="" data-bs-toggle="modal" data-bs-target="#insertModal"><i title="Editar" class="fa-solid fa-pen-to-square"></i></a>
          @method('delete')

          <a href=""><i title="Excluir" class="fa-solid fa-trash"></i></a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  <!-- Modal -->
  <div class="modal fade dark" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header black-text">
          <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('categoria.store') }}" enctype="multipart/form-data" class="black-text">
            @csrf
            <div class="mb-3">
              <label class="form-label">Categoria</label>
              <input type="text" class="form-control" id="name" name="categoryName" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade dark" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header black-text">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar categoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="PUT" action="{{ route('categoria.update', $categoria->idCategoria, $categoria->categoria) }}" enctype="multipart/form-data" class="black-text">
            @csrf
            <div class="mb-3">
              <label class="form-label">Categoria</label>
              <input type="text" class="form-control" id="name" name="categoryName" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {!! $temp->appends(['sort' => 'categoria'])->links() !!}
  </div>
</div>

@endsection