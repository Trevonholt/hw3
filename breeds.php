<?php
require_once("util-db.php");
require_once("model-breeds.php");

$pageTitle="Breeds";
include "view-header.php";
$farmers=selectBreeds();
include "view-breeds.php";
include "view-footer.php";
?>
