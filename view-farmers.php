<h1>Farmers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($farmer = $farmers->fetch_assoc()){
?>
  <tr>
    <td><?php $farmers['farmer_id']; ?></td>
    <td><?php $farmers['farmer_name']; ?></td>
    <td><?php $farmers['phone_number']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
