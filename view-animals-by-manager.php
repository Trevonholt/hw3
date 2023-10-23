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
    <td><?php echo $manager['manager_id']; ?></td>
    <td><?php echo $manager['manager_name']; ?></td>
    <td><?php echo $manager['description']; ?></td>
    <td><?php echo $manager['manager_number']; ?></td>
    <td><?php echo $manager['type']; ?></td>
    <td><?php echo $manager['count']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
