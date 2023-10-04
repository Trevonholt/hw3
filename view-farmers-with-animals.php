<h1>Farmers with animals</h1>
<div class="card-group">
<?php
while ($farmer=$farmers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $farmer['farmer_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $animals = selectFarmers($farmer['farmer_id']);
  while ($animal=$animals->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $animal['animal_id']; ?> - <?php echo $animal['type']; ?> - <?php echo $animal['breed']; ?> - <?php echo $animal['animal_count']; ?></li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Phone Number: <?php echo $farmer['phone_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
