<?php
require_once("util-db.php");
require_once("model-farmers-with-animals.php");

$pageTitle="Farmers with Animals";
include "view-header.php";
$farmers=selectFarmers();
include "view-farmers-with-animals.php";
include "view-footer.php";
?>
