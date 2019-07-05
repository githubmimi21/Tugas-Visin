<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        //Grafik 1
        var PieChartData= '<?php echo $PieChartData;?>';
        
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(JSON.parse(PieChartData));

        // Set chart options
        var options = {'title':'<?php echo $PieChartTitle; ?>',
                       'width':0 ,
                       'height':0,is3D: true};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        // Grafik 2
        var PieChartData1= '<?php echo $PieChartData1;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'jenisampah');
        data.addRows(JSON.parse(PieChartData1));
        var options1 = {'title':'<?php echo $PieChartTitle1; ?>',
                       'width':0 ,
                       'height':0,is3D:true};
        var chart = new google.visualization.PieChart(document.getElementById('chart1_div'));
        chart.draw(data, options1);

        //grafik 3
        var LineChartData2= '<?php echo $LineChartData2;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'jktbarat');
        data.addColumn('number', 'jktselatan');
        data.addColumn('number', 'jkttimur');
        data.addColumn('number', 'jktpusat');
        data.addColumn('number', 'jktutara');
        data.addRows(JSON.parse(LineChartData2));
        var options2 = {'title':'<?php echo $LineChartTitle2; ?>',
                       'width':0 ,
                       'height':0 , legend: { position: "right" },};
        var chart = new google.visualization.LineChart(document.getElementById('chart2_div'));
        chart.draw(data, options2);

        //grafik 4
        var BarChartData3= '<?php echo $BarChartData3;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'volsampah');
        data.addColumn('number', 'sampahdiolah');
        data.addColumn('number', 'sampahditangani');
        data.addRows(JSON.parse(BarChartData3));
        var options3 = {'title':'<?php echo $BarChartTitle3; ?>',
                       'width':0 ,
                       'height':0 };
        
        var chart = new google.visualization.ColumnChart(document.getElementById('chart3_div'));
        chart.draw(data, options3);

        

        //grafik 6
        var BarChartData5= '<?php echo $BarChartData5;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Lembung');
        data.addColumn('number', 'Beacukai');
        data.addColumn('number', 'Riario');
        data.addColumn('number', 'Sunter');
        data.addColumn('number', 'Kebunragunan');
        data.addRows(JSON.parse(BarChartData5));
        var options5 = {'title':'<?php echo $BarChartTitle5; ?>',
                       'width':0 ,
                       'height':0 };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart4_div'));
        chart.draw(data, options5);

      }
    </script>
  </head>

  <body>
    

    <table>
      <br><br><h2> <center> Visualisasi Informasi Data Indeks Pencemaran Air Situ/Waduk/Lembung di Provinsi DKI Jakarta
        <tr>
        <td>
          <div id="chart_div" ></div>
        </td>
        <td>
          <div id="chart1_div"></div>
        </td>
        <td>
          <div id="chart2_div"></div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="chart3_div"></div>
        </td>
        <td>
          <td>
          <div id="chart4_div"></div>
        </td>
      </tr>
    </table>
  </body>
</html>