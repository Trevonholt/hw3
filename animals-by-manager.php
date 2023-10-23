<?php
require_once("util-db.php");
require_once("model-animals-by-manager.php");

$pageTitle="Animals by Manager";
include "view-header.php";
$animals=selectAnimalsByManager($_POST['cid']);
include "view-animals-by-manager.php";
include "view-footer.php";
?>
