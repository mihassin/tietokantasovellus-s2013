
<?php
require_once 'libs/db_connect.php';
$yhteys = getConnection();
$kysely = pg_query($yhteys, "SELECT * FROM users");
$tulos = pg_num_rows($kysely);
echo $tulos;
for($i = 0; $i < 6; $i++) {
$etu = pg_fetch_result($kysely, $i, 2);
echo "</br>";
echo $etu . "  ";
$suku = pg_fetch_result($kysely, $i, 3);
echo $suku . "  ";
$email = pg_fetch_result($kysely, $i, 4);
echo $email . "  ";
$phone = pg_fetch_result($kysely, $i, 5);
echo $phone . "  ";
}
echo "<p>moi</p>";
?>
