<h1>Animals</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Breed</th>
      <th>Animal Count</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($animal=$animalss->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $animal['animal_id']; ?></td>
    <td><?php echo $animal['type']; ?></td>
    <td><?php echo $animal['breed']; ?></td>
    <td><?php echo $animal['animal_count']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
