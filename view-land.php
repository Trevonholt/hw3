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
while ($land=$lands->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $land['land_id']; ?></td>
    <td><?php echo $farmer['city']; ?></td>
    <td><?php echo $farmer['state']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
