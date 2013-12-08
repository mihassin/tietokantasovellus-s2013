<?php 
	function getMenu() {
		$querystr = "SELECT id, name, price FROM products WHERE product_type_id='1'";
		return $querystr;
	}

	function getDrinks() {
		$querystr = "SELECT id, name, price FROM products WHERE product_type_id='2'";
		return $querystr;
	}

	function getMaterials() {
		$querystr = "SELECT id, description as name, price FROM materials";
		return $querystr;
	}

        function getUsers() {
		$querystr = "SELECT id, email, first, second, phone FROM users";
		return $querystr;
	}

        function getOrders() {
		$querystr = "SELECT id, address, deliver_time, total_price FROM orders";
		return $querystr;
	}

        function getCartByUid($uid) {
        	$querystr = "SELECT cart_map.id as id, products.name as name, cart_map.amount as kpl, cart_map.price as price FROM products, cart_map WHERE products.id = cart_map.product_id AND cart_map.ordered = FALSE AND cart_map.user_id = {$uid};";
        	return $querystr;
        }

        function getCartItemsByUid($uid) {
        	$querystr = "SELECT cart_map.id as id, products.name as name, cart_map.amount as kpl, cart_map.price as price FROM products, cart_map WHERE products.id = cart_map.product_id AND cart_map.ordered = FALSE AND cart_map.user_id = {$uid} AND products.product_type_id='1';";
        	return $querystr;
        }

	function getMatById($id) {
		$querystr = "SELECT description, price FROM materials WHERE id={$id};";
		return $querystr;	
	}
        
	function getSingleCartRecordById($id) {
		$querystr = "SELECT amount, price FROM cart_map WHERE id={$id}";
		return $querystr;
	}

	function getMatUpdate($id, $total, $mats) {
		$querystr = "UPDATE cart_map SET price={$total}, added_mats='{$mats}' WHERE id={$id};";
		return $querystr;
	}
?>
