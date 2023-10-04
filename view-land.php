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
    <td><?php echo $land['city']; ?></td>
    <td><?php echo $land['state']; ?></td>
    <td>
     <form method="post" action="land-with-animals.php>
        <input type="hidden" name="aid" value="<?php echo $land['land_id']; ?>">
        <button type="submit" class="btn btn-primary">Lands</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
