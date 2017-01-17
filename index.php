<?php
require 'lib/Car.php';
require 'lib/MyCar.php';
$car = new MyCar();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>
<p><?= $car->getManufacturer() ?></p>
	
</body>
</html>