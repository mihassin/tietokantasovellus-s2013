<?php
require '/../libs/listing.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Käyttäjät</title>
    </head>
    <body>
        <h1>Käyttäjät</h1>
	<?php
	$query = "SELECT email, first, second, phone FROM users";
	getList($query);	
	?>
    </body>
</html>
