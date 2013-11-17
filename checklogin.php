<?php
session_start();
require_once 'libs/db_connection';

$yhteys = getConnection();
$email = $_POST['email'];
$password = $_POST['password']; 

$kysely = "SELECT id FROM users WHERE email = '{$email}' AND pw_hash = md5('{$password}' || users.pw_salt)";
$res = pg_query($yhteys, $kysely);

if(pg_num_rows($res) != 1) {
echo "moi";
}
else {
echo "hei";
}
?>
