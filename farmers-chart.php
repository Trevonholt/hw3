<?php
require_once("util-db.php");
require_once("model-farmers-chart.php");

$pageTitle="Farmers Chart";
include "view-header.php";

$farmers=selectFarmers();
include "view-farmers-chart.php";
include "view-footer.php";
?>
