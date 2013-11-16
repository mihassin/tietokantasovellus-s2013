<?php
require_once 'db_connect.php';
function getList($kysely) {
	$yhteys = getConnection(); 
	$query = pg_query($yhteys, $kysely);
	$rows = pg_num_rows($query);
	$cols = pg_num_fields($query);

	$res = pg_fetch_all($query);
	$fields = $res[0];

	echo "<table border='1'>";
	echo "<tr>";
	for($i = 0; $i<$cols; $i++) {
		echo "<th>" . key($fields) . "</th>";
		next($fields);
	}
	echo "</tr>";

	for($i = 0; $i<$rows; $i++) {
		$tmp = $res[$i];
		echo "<tr>";
		for($j = 0; $j<$cols; $j++) {
			echo "<td>" . $tmp[key($tmp)]  . "</td>";
			next($tmp); 
		}
	echo "</tr>";
	}
	echo "</table></br>";
}
?>
