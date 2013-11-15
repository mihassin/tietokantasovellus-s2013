<?php $kysely = "SELECT email, first, second, phone FROM users"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Käyttäjät</title>
    </head>
    <body>
        <h1>Käyttäjät</h1>
	<?php 
		require_once __DIR__.'/../libs/listing.php'; 
		getList($kysely);
	?>
    </body>
</html>
