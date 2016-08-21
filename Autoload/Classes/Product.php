<?php

class Product {

	public $item;
	public $description;
	public $quantity;
	public $price;

	public function __construct() {}

	public function setItem($item) {
		$this->item = $item;
	}

	public function getItem() {
		return $this->item;
	}

	public function setDescription($desc) {
		$this->description = $desc;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}
}

?>