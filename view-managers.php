<h1>Managers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Phone Number</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($manager=$managers->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $manager['manager_id']; ?></td>
    <td><?php echo $manager['manager_name']; ?></td>
    <td><?php echo $manager['description']; ?></td>
    <td><?php echo $manager['manager_number']; ?></td>
    <td><a href="animals-for-farmers.php?id=<?php echo $farmer['farmer_id']; ?>">Animals</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
