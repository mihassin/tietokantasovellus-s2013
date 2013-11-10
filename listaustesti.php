<?php
$yhteys = new PDO("psql:");
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);

$kysely = $yhteys->prepare("SELECT * FROM users");
$kysely->execute();

echo "<table>";
echo "<tr>";
echo "<th>Nimi</th>";
echo "</tr>";
while($rivi = $kysely->fetch()) {
	echo "<tr>";
	echo "<td>" . htmlspecialchars($rivi["first"]) . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
