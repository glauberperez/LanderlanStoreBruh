@extends('template.default')

@section('content')

<table>
    <tr>
        <td><div id="linegraph" style="width: 700px; height: 400px;"></div></td>
        <td><div id="piechart1" style="width: 400px; height: 400px;"></div></td>
    </tr>
    <tr>
        <td><div id="piechart2" style="width: 400px; height: 400px;"></div></td>
    </tr>
</table>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var linegraph_data = google.visualization.arrayToDataTable([
          ['Data', 'Pedidos por data'],
          ['data',      <?php echo($temp) ?>],
          ['data',       <?php echo($temp) ?>],
          ['data',      <?php echo($temp) ?>],
          ['data',       <?php echo($temp) ?>],
          ['data',      <?php echo($temp) ?>],
          ['data',       <?php echo($temp) ?>],
        ]);

        var pizzagraph_data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     <?php echo($temp1) ?>],
          ['Eat',      <?php echo($temp1) ?>],
          ['Commute',  <?php echo($temp1) ?>],
          ['Watch TV', <?php echo($temp1) ?>],
          ['Sleep',    <?php echo($temp1) ?>]
        ]);

        var pizzagraph1_data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     <?php echo($temp2) ?>],
          ['Eat',      <?php echo($temp2) ?>],
          ['Commute',  <?php echo($temp2) ?>],
          ['Watch TV', <?php echo($temp2) ?>],
          ['Sleep',    <?php echo($temp2) ?>]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.LineChart(document.getElementById('linegraph'));
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));



        chart.draw(linegraph_data, options);
        chart1.draw(pizzagraph_data, options);
        chart2.draw(pizzagraph_data1, options);
    }
</script>

@endsection