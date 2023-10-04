<?php
require_once("util-db.php");
require_once("model-animals-for-farmers.php");

$pageTitle="Animals For Farmers";
include "view-header.php";
$animals=selectAnimalsForFarmers($_GET['id']);
include "view-animals-for-farmers.php";
include "view-footer.php";
?>
