<?php

class MyCar extends Car {

	private $wheels;
	private $manufacturer;
	private $kilometrage;
	private $airbag;
	private $abs;
	private $doors;

	public function __construct($manufacturer, $km, $airbag, $abs, $doors) {
		parent::setManufacturer($manufacturer);
		parent::setKilometrage($km);
		parent::setAirbag($airbag);
		parent::setAbs($abs);
		parent::setDoors($doors);
	}

	public function SaveFile($data) {
		$dataFormat = json_encode($data);
		file_put_contents(__DIR__ . '/sauvegarde.json', $dataFormat, FILE_USE_INCLUDE_PATH);
	}
	
}
