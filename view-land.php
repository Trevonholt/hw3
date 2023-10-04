<h1>Land</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>City</th>
      <th>State</th>
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
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
