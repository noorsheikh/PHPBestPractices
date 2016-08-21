<?php
// Declare an object Product
class Product {

	// Delcare the properties of Product.
	public $item;
	public $description;
	public $quantity;
	public $price;

	// Declare the __construct method.
	public function __construct() {}

	// Delare the setters and getters of Product properties.
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