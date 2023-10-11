<h1>Farmers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone Number</th>
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
    <td><a href="animals-for-farmers.php?id=<?php echo $farmer['farmer_id']; ?>">Animals</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
