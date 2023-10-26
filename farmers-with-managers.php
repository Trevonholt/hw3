<?php
require_once("util-db.php");
require_once("model-farmers-with-managers.php");

$pageTitle = "Farmers with Managers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertAnimal($_POST['iid'],  $_POST['bid'], $_POST['mid'], $_POST['type'], $_POST['count'])) {
        echo '<div class="alert alert-success" role="alert">Animal added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
}
}
$farmers = selectFarmers();
include "view-farmers-with-managers.php";
include "view-footer.php";
?>
