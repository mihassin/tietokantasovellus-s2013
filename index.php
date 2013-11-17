<?php session_start();
if($_SESSION['userRole'] == 1)
require_once 'views/customer-header.php';
else 
require_once 'views/header.php';
require_once 'views/etusivu.php';
require_once 'views/footer.php'; ?>
