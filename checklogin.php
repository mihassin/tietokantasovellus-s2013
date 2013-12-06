<?php
session_start();
require_once 'libs/db_connect.php';
require_once 'libs/check-data.php';

$yhteys = getConnection();
$email = pg_escape_string($yhteys,$_POST['email']);
$email = checkData($email);
$password = pg_escape_string($yhteys,$_POST['password']); 
$password = checkData($password);

$kysely = "SELECT id FROM users WHERE email = '{$email}' AND pw_hash=md5('{$password}' || users.pw_salt)";
$query = pg_query($yhteys, $kysely);
$res = pg_num_rows($query);

if($res != 1) {
 require_once 'views/failure.php';
}
else {
$kayttaja = pg_fetch_row($query);
$id = $kayttaja[0];
$rooli = $kayttaja[1];

$_SESSION['userId'] = $id;
$_SESSION['userRole'] = $rooli;

header('Location: http://mihassin.users.cs.helsinki.fi');
exit;
}
?>
