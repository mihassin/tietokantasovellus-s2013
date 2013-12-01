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
		$querystr = "SELECT description as name, price FROM materials";
		return $querystr;
	}

        function getUsers() {
		$querystr = "SELECT email, first, second, phone FROM users";
		return $querystr;
	}

        function getOrders() {
		$querystr = "SELECT id, address, deliver_time, total_price FROM orders";
		return $querystr;
	}

        function getCartByUid($uid) {
        	$querystr = "SELECT products.name as tuote, cart_map.amount as kpl, products.price as price FROM products, cart_map WHERE products.id = cart_map.product_id AND cart_map.ordered = FALSE AND cart_map.user_id = {$uid};";
        	return $querystr;
        }
?>
