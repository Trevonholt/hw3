<div class="row">
  <div class="col">
    <h1>Farmers</h1>
  </div>
  <div class="col-auto">
<?php
include "view-farmers-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($farmer=$farmers->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $farmer['farmer_id']; ?></td>
    <td><?php echo $farmer['farmer_name']; ?></td>
    <td><?php echo $farmer['phone_number']; ?></td>
    <td><?php echo $farmer['email']; ?></td>
    <td><a href="managers-by-farmer.php?id=<?php echo $farmer['farmer_id']; ?>">Managers</td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
