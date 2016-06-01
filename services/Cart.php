<?php

class Cart {
	public static function get() {
		return [];
	}
	public static function add($product) {
		if(isset($_SESSION['order'])) {
			$order = json_decode($_SESSION['order']);
		} else {
			 $order = [];
		}
		array_push($order, $product);
		$_SESSION['order'] = json_encode($order);
	}

	public function count(){
		return count(json_decode($_SESSION['order']));
	}
	public function total(){
		$products = json_decode($_SESSION['order']);
		$count = 0;
		foreach($products as $product) {
			$count += $product->price;
		}
		$count = $count;
		return  $count;
	}
}