<?php
require_once("util-db.php");
require_once("model-animals.php");

$pageTitle="Animals";
include "view-header.php";
$animals=selectAnimals();
include "view-animals.php";
include "view-footer.php";
?>
