<?php
require_once("util-db.php");
require_once("model-farmers-with-land.php");

$pageTitle="Farmers with Land";
include "view-header.php";
$farmers=selectFarmers();
include "view-farmers-with-land.php";
include "view-footer.php";
?>
