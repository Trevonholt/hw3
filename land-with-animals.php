<?php
require_once("util-db.php");
require_once("model-land-with-animals.php");

$pageTitle="Land with Animals";
include "view-header.php";
$lands=selectLandWithAnimals($_POST['aid']);
include "view-land-with-animals.php";
include "view-footer.php";
?>
