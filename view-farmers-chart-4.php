                     <html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-cartesian-3d.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
</style>
</head>
<body>
  
  <div id="container"></div>
  

  <script>

    anychart.onDocumentReady(function () {
      // create data set on our data
      var dataSet = anychart.data.set([
        ['Nail polish', 12814, 3054, 4376, 4229],
        ['Eyebrow pencil', 13012, 5067, 3987, 3932],
        ['Rouge', 11624, 7004, 3574, 5221],
        ['Lipstick', 8814, 9054, 4376, 9256],
        ['Eyeshadows', 12998, 12043, 4572, 3308],
        ['Eyeliner', 12321, 15067, 3417, 5432],
        ['Foundation', 10342, 10119, 5231, 13701],
        ['Lip gloss', 22998, 12043, 4572, 4008],
        ['Mascara', 11261, 10419, 6134, 18712]
      ]);

      // map data for the first series, take x from the zero area and value from the first area of data set
      var firstSeriesData = dataSet.mapAs({ x: 0, value: 1 });

      // map data for the second series, take x from the zero area and value from the second area of data set
      var secondSeriesData = dataSet.mapAs({ x: 0, value: 2 });

      // map data for the second series, take x from the zero area and value from the third area of data set
      var thirdSeriesData = dataSet.mapAs({ x: 0, value: 3 });

      // map data for the fourth series, take x from the zero area and value from the fourth area of data set
      var fourthSeriesData = dataSet.mapAs({ x: 0, value: 4 });

      // create area chart
      var chart = anychart.area3d();

      // turn on chart animation
      chart.animation(true);

      // force chart to stack values by Y scale.
      chart.yScale().stackMode('percent');

      // turn on the crosshair
      var crosshair = chart.crosshair();
      crosshair.enabled(true).yStroke(null).xStroke('#fff').zIndex(99);
      crosshair.yLabel().enabled(false);
      crosshair.xLabel().enabled(false);

      // set chart title text settings
      chart.title('Regional ratio of cosmetic products sales');

      // set yAxis labels formatting, force it to add % to values
      chart.yAxis(0).labels().format('{%Value}%');

      // helper function to setup label settings for all series
      var setupSeries = function (series, name) {
        series.name(name).stroke('3 #fff 1');
        series.markers().zIndex(100);
        series.hovered().stroke('3 #fff 1');
        series
          .hovered()
          .markers()
          .enabled(true)
          .type('circle')
          .size(4)
          .stroke('1.5 #fff');
      };

      // temp variable to store series instance
      var series;

      // create first series with mapped data
      series = chart.area(firstSeriesData);
      setupSeries(series, 'Florida');

      // create second series with mapped data
      series = chart.area(secondSeriesData);
      setupSeries(series, 'Texas');

      // create third series with mapped data
      series = chart.area(thirdSeriesData);
      setupSeries(series, 'Arizona');

      // create fourth series with mapped data
      series = chart.area(fourthSeriesData);
      setupSeries(series, 'Nevada');

      // set interactivity and toolitp settings
      chart.interactivity().hoverMode('by-x');
      chart.tooltip().displayMode('union');

      // turn on legend
      chart.legend().enabled(true).fontSize(13).padding([0, 0, 25, 0]);

      // set container id for the chart
      chart.container('container');

      // initiate chart drawing
      chart.draw();
    });
  
</script>
</body>
</html>
                
