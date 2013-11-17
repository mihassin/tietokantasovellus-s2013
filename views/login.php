<?php require_once 'header.php'; ?>
	<h1>Kirjaudu sisään</h1>
	<div>
	<form method="post" action="checklogin.php">
		<label>Käyttäjätunnus</label></br>
		<input type="text" name="email" id="email" /></br>
		<label>Salasana</label></br>
		<input type="password" name="password" id="password" /></br></br>
		<input type="submit" name="kj-nappi" id="kj-nappi" value="Kirjaudu sisään" />
	</form>
	</div>
<?php require_once 'footer.php'; ?>
