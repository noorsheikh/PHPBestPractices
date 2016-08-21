<?php

// Include the init.php autoload here for accessing the Classes
include "init.php";

// Decalre objects for the Person class.
$person1 = new Person;
$person2 = new Person;
$person3 = new Person;

// Give values to the setMethods of the Person class here.
$person1->setName("Noor Sheikh");
$person1->setAge(27);
$person1->setGender("Male");

$person2->setName("Sohrab Shinwari");
$person2->setAge(25);
$person2->setGender("Male");

$person3->setName("Khalid Amini");
$person3->setAge(37);
$person3->setGender("Male");


// Declare objects for the Product class.
$product1 = new Product;
$product2 = new Product;
$product3 = new Product;

// Give values to the setMethods of the Person class here.
$product1->setItem("Watch");
$product1->setDescription("This is a simple Casio Beside watch.");
$product1->setQuantity(5);
$product1->setPrice(150);

$product2->setItem("Jack & Jones Glasses");
$product2->setDescription("Black pair of Jack & Jones sun glasses.");
$product2->setQuantity(3);
$product2->setPrice(35);

$product3->setItem("Nike Shoes");
$product3->setDescription("Pair of black Nike sport shoes.");
$product3->setQuantity(12);
$product3->setPrice(90);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autloading in PHP</title>

	<style type="text/css">
		body {
			font-family: Helvatica, Verdana, Arial, sans-serif;
			font-weight: normal;
			font-size: 100%;
		}

		.container {
			width: 960px;
			margin: 0 auto;
			padding-top: 10px;

		}

		table td {
			border: 1px solid #000;
			cell-spacing: 0px;
		}

	</style>
</head>
<body>
	<div class="container">
		<table>
			<thead>
				<tr>
					<td>Name</td>
					<td>Age</td>
					<td>Gender</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $person1->getName(); ?></td>
					<td><?php echo $person1->getAge(); ?></td>
					<td><?php echo $person1->getGender(); ?></td>
				</tr>
				<tr>
					<td><?php echo $person2->getName(); ?></td>
					<td><?php echo $person2->getAge(); ?></td>
					<td><?php echo $person2->getGender(); ?></td>
				</tr>
				<tr>
					<td><?php echo $person3->getName(); ?></td>
					<td><?php echo $person3->getAge(); ?></td>
					<td><?php echo $person3->getGender(); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="container">
		<table>
			<thead>
				<tr>
					<td>Item</td>
					<td>Description</td>
					<td>Quantity</td>
					<td>Price</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $product1->getItem(); ?></td>
					<td><?php echo $product1->getDescription(); ?></td>
					<td><?php echo $product1->getQuantity(); ?></td>
					<td><?php echo $product1->getPrice(); ?></td>
				</tr>
				<tr>
					<td><?php echo $product2->getItem(); ?></td>
					<td><?php echo $product2->getDescription(); ?></td>
					<td><?php echo $product2->getQuantity(); ?></td>
					<td><?php echo $product2->getPrice(); ?></td>
				</tr>
				<tr>
					<td><?php echo $product3->getItem(); ?></td>
					<td><?php echo $product3->getDescription(); ?></td>
					<td><?php echo $product3->getQuantity(); ?></td>
					<td><?php echo $product3->getPrice(); ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>