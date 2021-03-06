</div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= site_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= site_url('assets/js/bootstrap.min.js') ?>"></script>
<?= isset($fscripts) ? $fscripts : '' ?>

<!-- Icons -->
<script src="<?= site_url('assets/js/feather.min.js') ?>"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="<?= site_url('assets/js/Chart.min.js') ?>"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>
</body>

</html>