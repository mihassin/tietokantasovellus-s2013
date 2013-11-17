<?php session_start();
if($_SESSION['userRole'] == 1)
require_once 'views/customer-header.php';

if(($_SESSION['userRole'] == 2) || ($_SESSION['userRole'] == 3))
require_once 'views/employee-header.php';

if($_SESSION['userRole'] == 4)
require_once 'views/admin-header.php';

else {
echo "<!DOCTYPE html><html>
<head>
<title>Pizzapalvelu</title></head>
<body><nav>
<a href='index.php'>Etusivu</a>
<a href='login.php'>Kirjaudu sisään</a>
<a href='newuser.php'>Luo tunnus</a>
</nav></br>"; 
}
?>
