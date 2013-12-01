<?php
require_once 'db_connect.php';
function getCartList($kysely) {
	$yhteys = getConnection();
	$query = pg_query($yhteys, $kysely);
	$rows = pg_num_rows($query);
	$res = pg_fetch_all($query);
	if($res == 0) {	
		echo "Ostoskori on tyhjä!</br>";
		return 1;
	}
	else {
		echo "<ol>";
		for($i = 0; $i < $rows; $i++) {
			$tmp = $res[$i];
  			$name = $tmp['name'];
			$kpl = $tmp['kpl'];
			$price = $tmp['price'];
                	$price = $kpl * $price;
			if($kpl == 1)
			 echo "<li>'{$name}' {$kpl} kappale. Hinta: {$price}</li>";
			else
			 echo "<li>'{$name}' {$kpl} kappaletta. Hinta: {$price}</li>";
		}
		echo "</ol>";
		return 0;
	}
}
?>
