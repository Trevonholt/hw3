<?php
require_once("util-db.php");
require_once("model-farmers-with-managers.php");

$pageTitle="Farmers with Managers";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add": 
      if (insertMans($_POST['iid'],  $_POST['bid'], $_POST['mid'], $_POST['type'], $_POST['count'])) {
        echo '<div class="alert alert-success" role="alert">Manager added!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
        case "Edit": 
      if (updateBreeds($_POST['type'], $_POST['breed'], $_POST['gender'], $_POST['bid'])) {
        echo '<div class="alert alert-success" role="alert">Breed edited!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
    case "Delete": 
      if (deleteBreeds($_POST['bid'])) {
        echo '<div class="alert alert-success" role="alert">Breed deleted!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
  }
}

$farmers=selectFarmers();
include "view-farmers-with-managers.php";
include "view-footer.php";
?>
