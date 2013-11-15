<?php $kysely = "SELECT description, price FROM materials"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Käyttäjät</title>
    </head>
    <body>
        <h1>Lisukkeet</h1>
	<?php 
		require_once __DIR__.'/../libs/listing.php'; 
		getList($kysely);
	?>
    </body>
</html>

