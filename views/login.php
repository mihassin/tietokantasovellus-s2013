<?php require_once 'header.php'; ?>
	<h1>Kirjaudu sisään</h1>
	<div>
	<form method="post" action="checklogin.php">
		<label>Käyttäjätunnus</label></br>
		<input type="text" name="email" /></br>
		<label>Salasana</label></br>
		<input type="password" name="password" /></br></br>
		<input type="submit" name="kj-nappi" value="Kirjaudu sisään" />
	</form>
	</div>
<?php require_once 'footer.php'; ?>
