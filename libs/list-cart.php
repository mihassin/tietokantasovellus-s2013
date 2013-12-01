<?php
require_once 'db_connect.php';
function getCartList($kysely) {
	$yhteys = getConnection();
	$query = pg_query($yhteys, $kysely);
	$rows = pg_num_rows($query);
	$res = pg_fetch_all($query);
	echo "lista";
	echo "<ol>";
	for($i = 0; $i < $rows; $i++) {
		$tmp = $res[$i];
  		$name = $tmp['tuote'];
		$kpl = $tmp['kpl'];
		$price = $tmp['price'];
                $price = $kpl * $price;
		echo "<li>{$tuote} {$kpl} kappaletta. Hinta: {$price}</li>";
	}
	echo "</ol>";
}
?>
