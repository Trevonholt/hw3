<select class="form-select" id="iid" name="iid">
<?php
while ($farmerItem = $farmerList->fetch_assoc()) {
  $selText = "";
  if ($selectedFarmer == $farmerItem['farmer_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $farmerItem['farmer_id']; ?>"<?=$selText?>><?php echo $farmerItem['farmer_name']; ?></option>
<?php
}
?>
</select>
