<?php
require_once 'libs/db_connect.php';

$yhteys = getConnection(); 
$query = pg_query($yhteys, "SELECT description, price FROM materials");
$rows = pg_num_rows($query);
$cols = pg_num_fields($query);
echo "rows: " . $rows . " cols: " . $cols;
$res = pg_fetch_all($query);
$ala = $res[0];

echo "<table border='1'>";
echo "<tr>";
for($i = 0; $i<$cols; $i++) {
	echo "<th>" . key($ala) . "</th>";
	next($ala);
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
echo "</table>";
?>
