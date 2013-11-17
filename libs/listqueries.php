<?php 
	function getMenu() {
		$querystr = "SELECT name, price FROM products WHERE product_type_id='1'";
		return $querystr;
	}

	function getDrinks() {
		$querystr = "SELECT name, price FROM products WHERE product_type_id='2'";
		return $querystr;
	}

	function getMaterials() {
		$querystr = "SELECT description, price FROM materials";
		return $querystr;
	}

        function getUsers() {
		$querystr = "SELECT email, first, second, phone FROM users";
		return $querystr;
	}
?>
