<?php

class MyCar extends Car {

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
	
}