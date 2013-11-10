
<?php
$yhteys = pg_connect("host=localhost dbname=mihassin user=mihassin password=55f580744fb4df2e");
$kysely = pg_query($yhteys, "SELECT * FROM users");
$tulos = pg_num_rows($kysely);
echo $tulos;
echo "<p>moi</p>";
?>
