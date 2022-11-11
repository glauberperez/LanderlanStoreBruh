@extends('template.default')

@section('content')

<table>
  <tr>
    <td>
      <div id="clientes_chart" style="width: 700px; height: 400px;"></div>
    </td>
    <td>
      <div id="categories_chart" style="width: 400px; height: 400px;"></div>
    </td>
  </tr>
  <tr>
    <td>
      <div id="produtos_chart" style="width: 400px; height: 400px;"></div>
    </td>
  </tr>
</table>

<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
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

        console.log(json)

        /*  json.forEach(item => {
           data.push(item.produto)
         })

         console.table(data)

         return data */
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

    let pedidos_data = new Chart(ctx, {
      type: 'line',
      data: {
        labels: meses,
        datasets: [{
          label: 'Reservas feitas em 6 meses',
          data: valores,
          borderWidth: 6,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio: false,
      }
    });

    let top_selling_products = getTop5SellingProducts()
    console.log(top_selling_products)

    let top_selling_categories = getTop5SellingCategories()
    console.log(top_selling_categories)

    // uses the data from the getTop5SellingProducts() function to populate the chart
    let produtos_data = google.visualization.arrayToDataTable([
      ['Produto', 'Quantidade vendida'],
      ['produto', 1],
      ['produto', 1],
      ['produto', 1],
      ['produto', 1],
      ['produto', 1],
    ]);



    let produtos_options = {
      title: 'Total de produtos cadastrados'
    };

    const pedidos_chart = new google.visualization.PieChart(document.querySelector('#pedidos_chart'));
    const produtos_chart = new google.visualization.PieChart(document.querySelector('#produtos_chart'));



    clientes_chart.draw(clientes_data, clientes_options);
    pedidos_chart.draw(top_selling, pedidos_options);
    produtos_chart.draw(produtos_data, produtos_options);
  }
</script>

@endsection