<h1>Land with Animals</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Breed</th>
      <th>Animal Count</th>
      <th>Manger Name</th>
      <th>Description</th>
      <th>Manager Age</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($land=$lands->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $land['animal_id']; ?></td>
    <td><?php echo $land['type']; ?></td>
    <td><?php echo $land['breed']; ?></td>
    <td><?php echo $land['animal_count']; ?></td>
    <td><?php echo $land['name']; ?></td>
    <td><?php echo $land['description']; ?></td>
    <td><?php echo $land['age']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
