<?php
require_once("util-db.php");
require_once("model-managers.php");

$pageTitle="Managers";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add": 
      if (insertManagers($_POST['mName'], $_POST['desc'], $_POST['mNum'])) {
        echo '<div class="alert alert-success" role="alert">Manager added!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
        case "Edit": 
      if (updateManagers($_POST['mName'], $_POST['desc'], $_POST['mNum'], $_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Manager edited!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
    case "Delete": 
      if (deleteManagers($_POST['mid'])) {
        echo '<div class="alert alert-success" role="alert">Manager deleted!</div>';
      } else{
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
  }
}

$managers=selectManagers();
include "view-managers.php";
include "view-footer.php";
?>
