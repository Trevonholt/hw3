<h1>Animals for Farmers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Breed</th>
      <th>Animal Count</th>
      <th>Description</th>
      <th>Manger Name</th>
      <th>Manager Age</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($animal=$animals->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $animal['animal_id']; ?></td>
    <td><?php echo $animal['type']; ?></td>
    <td><?php echo $animal['breed']; ?></td>
    <td><?php echo $animal['animal_count']; ?></td>
    <td><?php echo $animal['description']; ?></td>
    <td><?php echo $animal['name']; ?></td>
    <td><?php echo $animal['age']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
