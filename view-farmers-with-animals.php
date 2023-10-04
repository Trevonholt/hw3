<h1>Farmers with animals</h1>
<div class="card-group">
<?php
while ($farmer=$farmers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $farmer['farmer_name']; ?></h5>
      <p class="card-text">
<?php
  $animals = selectAnimalsByFarmer($farmer['farmer_id']);
  while ($animal=$animals->fetch_assoc()){
?>
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Phone Number: <?php echo $farmer['phone_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
