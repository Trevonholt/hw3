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
while ($farmer = $Farmers->fetch_assoc()){
?>
  <tr>
    <td><?php $farmer['farmer_id']; ?></td>
    <td><?php $farmer['farmer_name']; ?></td>
    <td><?php $farmer['phone_number']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
