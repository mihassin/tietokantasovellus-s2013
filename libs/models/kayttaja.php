<?php
require_once __DIR__.'/../db_connect.php';
 
class Kayttaja {
	private $id;
	private $role_type_id;
	private $first;
	private $second;
	private $email;
	private $phone;
	private $pw_salt;
	private $pw_hash;

	public getSome() {
		$yhteys = getConnection();
		$query = pg_query($yhteys, "SELECT * FROM users");
		$result = pg_fetch_all($query);
		print_r($result);
	}
}
?>
