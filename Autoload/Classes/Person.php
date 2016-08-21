<?php
// Declare an object Class1
class Person {

	// Define the individual properties
	public $name;
	public $age;
	public $gender;

	public function __construct() {}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}

	public function setGender($gender) {
		$this->gender = $gender;
	}

	public function getGender() {
		return $this->gender;
	}
}

?>