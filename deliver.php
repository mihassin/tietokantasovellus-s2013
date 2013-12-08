<?php 
require_once 'libs/checkAccess.php';
require_once 'libs/dropList.php';
$kysely = "SELECT id as id, id as name FROM orders WHERE delivered=FALSE;";
require_once 'views/deliver.php';
?>
