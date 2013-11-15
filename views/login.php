<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Kirjaudu sisään</title>
</head>
<body>
	<h1>Kirjaudu sisään</h1>
	<div>
	<form method="post">
		<label>Käyttäjätunnus</label></br>
		<input type="text" name="user" id="user" /></br>
		<label>Salasana</label></br>
		<input type="password" name="password" id="password" /></br></br>
		<input type="submit" name="kj-nappi" id="kj-nappi" value="Kirjaudu sisään" />
		<input type="submit" name="ua-nappi" id="ua-nappi" formaction="newuser.php" value="Luo tunnus" />
	</form>
	</div>
</body>
</html>
