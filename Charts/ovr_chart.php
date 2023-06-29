<?php include 'C:\xampp\htdocs\Prog\Chart_values\ovr_avg_vals.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.3/apexcharts.min.js"></script>

<div id="bar-chart"></div>

<script>
  var options = {
    series: [{
      data: <?php echo $json_data; ?>
    }],
    chart: {
      type: 'bar',
      height: 350,
      toolbar: {
        show: true,
        tools: {
          download: false
        }
      }
    },
    theme: {
      palette: 'palette1' // upto palette10
    },
    plotOptions: {
      bar: {
        borderRadius: 4,
        distributed: false,
        horizontal: false,
        columnWidth: '60%',
      }
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    xaxis: {
      categories: ['Academics', 'Social Life', 'Extracurricular', 'Physical health', 'Mental health', 'Diversity', 'Safety',
        'Resources', 'Career', 'Finance'
      ],
    },
    yaxis: {
      max: 100,
      tickAmount: 5,
      labels: {
        formatter: function(val) {
          return val.toFixed(1);
        }
      }
    },
    colors: ['#254165', '#ad1f43', '#379446', '#d1953b', '#4f35a1']
  };

  var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
  chart.render();
</script>
<!-- <?php var_dump($avg_aca); ?> -->