<?php
require_once("util-db.php");
require_once("model-farmers.php");

$pageTitle="Farmers";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add": 
      if (insertFarmers($_POST['fName'], $_POST['phoneN'], $_POST['email'])) {
        echo '<div class="alert alert-success" role="alert">Farmer added!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
  }
}
$farmers=selectFarmers();
include "view-farmers.php";
include "view-footer.php";
?>
