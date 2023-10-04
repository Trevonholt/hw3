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
while ($animal=$animals->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $animal['animal_id']; ?></td>
    <td><?php echo $animal['type']; ?></td>
    <td><?php echo $animal['breed']; ?></td>
    <td><?php echo $animal['animal_count']; ?></td>

     <form method="post" action="land-with-animals.php>
        <input type="hidden" name="aid" value=
        <button type="submit" class="btn btn-primary">Lands</button>
      </form>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
