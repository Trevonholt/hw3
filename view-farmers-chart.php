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
$farmers=selectFarmers();
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

<div>
  <canvas id="myChart2"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const tvt = document.getElementById('myChart2');

 new Chart(tvt, {
    type: 'polarArea',
    data: {
      labels: [
<?php
$farmers=selectFarmers();
while ($farmer=$farmers->fetch_assoc()) {
  echo "'" . $farmer['farmer_name'] . "', ";
}
?>
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [
<?php
$farmers=selectFarmers();
while ($farmer=$farmers->fetch_assoc()) {
  echo $farmer['num_managers'] . ", ";
}
?>
],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)',
      'rgb(201, 203, 207)',
      'rgb(54, 162, 235)'
    ]
  }]
};
  
</script>
