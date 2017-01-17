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
	<form action="/" method="post">
		<h2>Modifier votre voiture :</h2>
		<div>
			<label for="wheels">wheels : </label>
		</div>
		<div>
			<input type="text" id="wheels" name="wheels">
		</div>
		<div>
			<label for="manufacturer">manufacturer : </label>
		</div>
		<div>
			<input type="text" id="manufacturer" name="manufacturer">
		</div>
		<div>
			<label for="kilometrage">kilometrage : </label>
		</div>
		<div>
			<input type="text" id="kilometrage" name="kilometrage">
		</div>
		<div>
			<label for="airbag">airbag : </label>
		</div>
		<div>
			<select name="airbag" id="airbag">
				<option value="true">Oui</option>
				<option value="false">Non</option>
			</select>
		</div>
		<div>
			<label for="abs">abs : </label>
		</div>
		<div>
			<select name="abs" id="abs">
				<option value="true">Oui</option>
				<option value="false">Non</option>
			</select>
		</div>
		<div>
			<label for="doors">doors : </label>
		</div>
		<div>
			<input type="text" id="doors" name="doors">
		</div>
		<div>
			<input type="submit" value="Envoyer">
		</div>

	</form>

	<?php 
	
	$wheels = $_POST["wheels"];
	$manufacturer = $_POST["manufacturer"];
	$kilometrage = $_POST["kilometrage"];
	$airbag = $_POST["airbag"];
	$abs = $_POST["abs"];
	$doors = $_POST["doors"];

	if ($wheels) {
		$car->setWheels($wheels);
	}

	if ($manufacturer) {
		$car->setManufacturer($manufacturer);
	}

	if ($kilometrage) {
		$car->setKilometrage($kilometrage);
	}

	if ($airbag) {
		$car->setAirbag($airbag);
	}

	if ($abs) {
		$car->setAbs($abs);
	}

	if ($doors) {
		$car->setDoors($doors);
	}

	$data = array(
		$car->getWheels(), 
		$car->getManufacturer(), 
		$car->getKilometrage($kilometrage), 
		$car->getAirbag($airbag), 
		$car->getAbs($abs), 
		$car->getDoors($doors)
	);

	$car->SaveFile($data);

	?>
	

	<h1>My Car</h1>
	<p>Nombre de roues : <?= $car->getWheels()?></p>
	<p>Marque : <?= $car->getManufacturer() ?></p>
	<p>Kilométrage : <?= $car->getKilometrage()?></p>
	<p>Airbag : <?= $car->getAirbag()?></p>
	<p>Abs : <?= $car->getAbs()?></p>
	<p>Nombre de portes : <?= $car->getDoors()?></p>



</body>
</html>