<div class="row">
  <div class="col">
    <h1>Farmers with Managers</h1>
  </div>
  <div class="col-auto">
<?php
include "view-mans-newform.php";
?>
  </div>
</div>
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
  $managers= selectManagersByFarmer($farmer['farmer_id']);
  while ($manager = $managers->fetch_assoc()) {
?>
      <li class="list-group-item"><?php echo $manager['manager_name']; ?>- <?php echo $manager['description']; ?>-<?php echo $manager['manager_number']; ?></li>
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
