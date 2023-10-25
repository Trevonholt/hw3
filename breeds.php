<?php
require_once("util-db.php");
require_once("model-breeds.php");

$pageTitle="Breeds";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add": 
      if (insertBreeds($_POST['type'], $_POST['breed'], $_POST['gender'])) {
        echo '<div class="alert alert-success" role="alert">Breed added!</div>';
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
$breeds=selectBreeds();
include "view-breeds.php";
include "view-footer.php";
?>
