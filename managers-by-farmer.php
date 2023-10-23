<?php
require_once("util-db.php");
require_once("model-managers-by-farmer.php");

$pageTitle="Managers for Farmers";
include "view-header.php";
$managers=selectManagersByFarmer($_GET['iid']);
include "view-managers-by-farmer.php";
include "view-footer.php";
?>
