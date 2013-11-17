<?php
require_once 'libs/db_connect.php';

$yhteys = getConnection();
$email = pg_escape_string($yhteys,$_POST['email']);
$password = pg_escape_string($yhteys,$_POST['password']); 

$kysely = "SELECT id FROM users WHERE email = '{$email}' AND pw_hash=md5('{$password}' || users.pw_salt)";
$query = pg_query($yhteys, $kysely);
$res = pg_num_rows($query);

if($res != 1) {
 echo "jes";
}
else {
echo "buu";
}
?>
