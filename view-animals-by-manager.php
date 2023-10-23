<h1>Animals by Manager</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Phone Number</th>
      <th>Type of Animals</th>
      <th>Number of Animals</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($animal=$animals->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $animal['manager_id']; ?></td>
    <td><?php echo $animal['manager_name']; ?></td>
    <td><?php echo $animal['description']; ?></td>
    <td><?php echo $animal['manager_number']; ?></td>
    <td><?php echo $animal['type']; ?></td>
    <td><?php echo $animal['count']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
