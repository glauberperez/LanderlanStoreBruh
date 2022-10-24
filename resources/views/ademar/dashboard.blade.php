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

        var linegraph = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.LineChart(document.getElementById('linegraph'));
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));



        chart.draw(data, linegraph);
        chart1.draw(data, options);
        chart2.draw(data, options);
    }
</script>
@endsection