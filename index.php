<?php
require 'lib/Car.php';
require 'lib/MyCar.php';
$car = new MyCar("Ford", "Beaucoup", true, true, 4);
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>
<p>Marque : <?= $car->getManufacturer() ?></p>
<p>Nombre de roues : <?= $car->getWheels()?></p>
<p>Kilométrage : <?= $car->getKilometrage()?></p>
<p>Airbag : <?= $car->getAirbag()?></p>
<p>Abs : <?= $car->getAbs()?></p>
<p>Nombre de portes : <?= $car->getDoors()?></p>
</body>
</html>