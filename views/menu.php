<?php $kysely = "SELECT name, price FROM products WHERE product_type_id='1'"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Käyttäjät</title>
    </head>
    <body>
        <h1>Ruokalista</h1>
	<?php 
		require_once __DIR__.'/../libs/listing.php'; 
		getList($kysely);
	?>
    </body>
</html>
