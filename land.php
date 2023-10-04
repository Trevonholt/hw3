<?php
require_once("util-db.php");
require_once("model-land.php");

$pageTitle="Land";
include "view-header.php";
$farmers=selectLand();
include "view-land.php";
include "view-footer.php";
?>
