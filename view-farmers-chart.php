<h1>Farmers chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($farmer=$farmers->fetch_assoc()) {
  echo $farmer['num_managers'] . ", ";
}
?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        <?php
$farmers=selectFarmers();
while ($farmer=$farmers->fetch_assoc()) {
  echo "'" . $farmer['farmer_name'] . "', ";
}
?>
    ]
},
  });
</script>
<div>
  <canvas id="myChart1"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ttt = document.getElementById('myChart1');

 new Chart(ttt, {
    type: 'bar',
    data: {
        datasets: [{
            type: 'bar',
            label: 'Bar Dataset',
            data: [
<?php
while ($farmer=$farmers->fetch_assoc()) {
  echo $farmer['num_managers'] . ", ";
}
?>
              ]
        }, ],
        labels: [
<?php
$farmers=selectFarmers();
while ($farmer=$farmers->fetch_assoc()) {
  echo "'" . $farmer['farmer_name'] . "', ";
}
?>
          ]
    },
  });
</script>
