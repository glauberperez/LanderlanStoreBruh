@extends('template.default')

@section('content')

<table>
  <tr>
    <td>
      <canvas id="clientes_chart" style="width: 700px; height: 400px;"></canvas>
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