<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Uusi käyttäjä</title>
</head>
<body>
	<h1>Luo käyttäjätunnus</h1>
	<div>
	<form method="post">
		<label>Sähköposti</label></br>
		<input type="email" name="email" id="email" /></br>
		<label>Salasana</label></br>
		<input type="password" name="password" id="password" /></br>
		<label>Etunimi</label></br>
		<input type="text" name="first" id="first" /></br>
		<label>Sukunimi</label></br>
		<input type="text" name="second" id="second" /></br>		
		<label>Puhelin numero</label></br>
		<input type="text" name="phone" id="phone" /></br></br>	
		<input type="submit" name="luotunnus-nappi" id="luotunnus-nappi" value="Luo tunnus"/>	
		<input type="submit" name="kirjaudu-sisään" id="kirjaudu-sisään" formaction="login.php" value="Kirjaudu sisään"/>	
	</form>
	</div>
</body>
</html>
