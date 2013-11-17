<?php
session_start();
require_once 'libs/db_connection';

if((!isset($_POST['email'])) || (!isset($_POST['password']))) {
header('Location: http://mihassin.users.cs.helsinki.fi/login.php');
exit;
}

$yhteys = getConnection();
$email = pg_escape_string($yhteys, $_POST['email']);
$password = pg_escape_string($yhteys, $_POST['password']); 

$kysely = "SELECT id FROM users WHERE email = '{$email}' AND pw_hash = md5('{$password}' || users.pw_salt)";
$res = pg_query($query);

if(pg_num_rows($res) != 1) {
echo "moi";
}
?>
