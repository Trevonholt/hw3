<?php
require_once("utl-db.php");
require_once("model-farmers.php");

$pageTitle="Farmers";
include "view-header.php";
$farmers= selectFarmers();
include "view-farmers.php";
include "view-footer.php";
?>
