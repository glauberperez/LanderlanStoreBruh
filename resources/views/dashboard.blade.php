@extends('template.default')

@section('content')

<table>
    <tr>
        <td><div id="clientes_chart" style="width: 700px; height: 400px;"></div></td>
        <td><div id="pedidos_chart" style="width: 400px; height: 400px;"></div></td>
    </tr>
    <tr>
        <td><div id="produtos_chart" style="width: 400px; height: 400px;"></div></td>
    </tr>
</table>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    const getTop5SellingProducts = async () => {
      await fetch('http://127.0.0.1:8000/getTop5SellingProducts', {
          method: 'GET',
          mode: 'no-cors',
          headers: new Headers({
            Accept: 'application/json',
          })
        })
        .then(response => response.json())
            .then(json => {
              let data = Array()

              json.forEach(item => {
                data.push(item.produto)
              })
              
              console.table(data)

              return data
            })
            .catch(error => console.error(error))
    }

    const getTop5SellingCategories = async () => {
      await fetch('http://127.0.0.1:8000/getTop5SellingCategories', {
          method: 'GET',
          mode: 'no-cors',
          headers: new Headers({
            Accept: 'application/json',
          })
        })
        .then(response => response.json())
            .then(json => {
              let data = Array()

              json.forEach(item => {
                data.push(item)
              })
              
              console.table(data)

              return data
            })
            .catch(error => console.error(error))
    }

    function drawChart() {

        let pedidos_data = google.visualization.arrayToDataTable([
          ['Data', 'Pedidos por data'],
          ['data',      <?php echo($pedidos) ?>],
          ['data',       <?php echo($pedidos) ?>],
          ['data',      <?php echo($pedidos) ?>],
          ['data',       <?php echo($pedidos) ?>],
          ['data',      <?php echo($pedidos) ?>],
          ['data',       <?php echo($pedidos) ?>],
        ]);

        let top_selling_products = getTop5SellingProducts()
        console.log(top_selling_products)

        let top_selling_categories = getTop5SellingCategories()
        console.log(top_selling_categories)


        let produtos_data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     <?php echo($produtos) ?>],
          ['Eat',      <?php echo($produtos) ?>],
          ['Commute',  <?php echo($produtos) ?>],
          ['Watch TV', <?php echo($produtos) ?>],
          ['Sleep',    <?php echo($produtos) ?>]
        ]);

        let clientes_data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     <?php echo($clientes) ?>],
          ['Eat',      <?php echo($clientes) ?>],
          ['Commute',  <?php echo($clientes) ?>],
          ['Watch TV', <?php echo($clientes) ?>],
          ['Sleep',    <?php echo($clientes) ?>]
        ]);

        let clientes_options = {
          title: 'Todos os clientes'
        };

        let pedidos_options = {
          title: 'Total de pedidos'
        };

        let produtos_options = {
          title: 'Total de produtos cadastrados'
        };

        const clientes_chart = new google.visualization.LineChart(document.querySelector('#clientes_chart'));
        const pedidos_chart = new google.visualization.PieChart(document.querySelector('#pedidos_chart'));
        const produtos_chart = new google.visualization.PieChart(document.querySelector('#produtos_chart'));



        clientes_chart.draw(clientes_data, clientes_options);
        pedidos_chart.draw(top_selling, pedidos_options);
        produtos_chart.draw(produtos_data, produtos_options);
    }
</script>

@endsection