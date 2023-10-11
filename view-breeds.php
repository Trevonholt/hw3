<h1>Breeds</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Breed</th>
      <th>Gender</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($breed=$breeds->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $breed['breed_id']; ?></td>
    <td><?php echo $breed['type']; ?></td>
    <td><?php echo $breed['breed']; ?></td>
    <td><?php echo $breed['gender']; ?></td>
    <td><a href="animals-for-farmers.php?id=<?php echo $farmer['farmer_id']; ?>">Animals</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
