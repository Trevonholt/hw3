<select class="form-select" id="iid" name="iid">
<?php
while ($farmerItem= $$farmerList->fetch_assoc()){
?>
    <option value="<?php echo $farmerItem['farmer_id']; ?>"><?php echo $farmerItem['farmer_name']; ?></option>
<?php
}
?>

</select>
