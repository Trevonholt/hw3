<?php
require_once("util-db.php");
require_once("model-farmers-with-managers.php");

$pageTitle="Farmers with Managers";
include "view-header.php";
$farmers=selectFarmers();
include "view-farmers-with-managers.php";
include "view-footer.php";
?>
