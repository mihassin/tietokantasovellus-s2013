<?php session_start();
if(!empty($_SESSION['userId']))
require_once 'views/customer-header.php';
else
require_once 'views/header.php';
require_once 'views/etusivu.php';
require_once 'views/footer.php'; ?>
