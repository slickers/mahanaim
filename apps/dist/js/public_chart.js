$(function () {
  $.ajax({
    url: "apps/pages/chart_data.php",
    type: "GET",
    success: function (data) {
      chartData = data;
      var chartProperties = {
        caption: "Rasio Usia",
        xAxisName: "kelompok",
        yAxisName: "jumlah",
        rotatevalues: "0",
        theme: "zune",
      };
      apiChart = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "800",
        height: "300",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData,
        },
      });
      apiChart.render();
    },
  });
});
