<aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
<footer class="main-footer">
            <strong>Copyright &copy; 2024-2025
                <a href="https://adminlte.io">ETS NETWORKS</a>.</strong>
            All rights reserved.
        </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('kusum/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('kusum/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE -->
  <script src="{{asset('kusum/dist/js/adminlte.js')}}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{asset('kusum/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('kusum/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('kusum/dist/js/pages/dashboard3.js')}}"></script>
 
  <script>
    (function destroy() {
      document.getElementById('sidebar-overlay').remove();
    })();
  </script>
  <script>
    var optionsBar = {
      series: [{
        data: [44, 55, 41, 64, 22, 43, 21]
      }, {
        data: [53, 32, 33, 52, 13, 44, 32]
      }],
      chart: {
        type: 'bar',
        height: 405
      },
      plotOptions: {
        bar: {
          horizontal: false,
          dataLabels: {
            position: 'top',
          },
          barWidth: '10px',
        }
      },
      colors: ['#023020', '#7DF9FF'],
      dataLabels: {
        enabled: true,
        offsetX: 0,
        offsetY: -15,
        style: {
          fontSize: '12px',
          colors: ['#355E3B']
        }
      },
      stroke: {
        show: true,
        colors: ['#C9CC3F']
      },
      tooltip: {
        shared: true,
        intersect: false
      },
      xaxis: {
        categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
      },
    };

    var chartBar = new ApexCharts(document.querySelector("#chart"), optionsBar);
    chartBar.render();

    var optionsPie = {
      series: [44, 55, 13, 43, 22],
      chart: {
        toolbar: {
          show: true,
          tools: {
            download: true,
          },
        },
        width: '100%',
        height: '450px',
        type: 'donut',
      },
      dataLabels: {
        enabled: true,
      },
      fill: {
        type: 'solid',
      },
      legend: {
        position: 'bottom'
      },
      labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
      colors: ['#50C878', '#C4B454', '#AAFF00', '#5F9EA0', '#097969'],
      responsive: [{
        breakpoint: 450,
        options: {
          chart: {
            width: '80%'
          },
        }
      }]
    };

    var chartPie = new ApexCharts(document.querySelector("#chart2"), optionsPie);
    chartPie.render();

    window.addEventListener('resize', function () {
      let barHeight = document.getElementById('bar').clientHeight;
      chartPie.updateOptions({
        chart: {
          height: barHeight
        }
      });
    });
  </script>


</body>

</html>