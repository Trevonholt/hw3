<h1>Farmers with Managers</h1>
<div class="card-group">
<?php
while ($farmer = $farmers->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $farmer['farmer_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php 
  $managers = selectManagersByFarmers($farmer['farmer_id']);
  while ($manager=$managers->fetch_assoc()){
?>
    <li class="list-group-item"><?php echo $manager['manager_name']; ?> - <?php echo $manager['manager_number']; ?> - <?php echo $manager['type']; ?></td> - <?php echo $manager['count']; ?></li>
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
