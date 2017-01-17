<?php

class MyCar extends Car {

	private $manufacturer;
	private $kilometrage;
	private $airbag;
	private $abs;
	private $doors;

	public function __construct() {
		parent::setManufacturer("Ford");
		parent::setKilometrage("Beaucoup");
		parent::setAirbag(true);
		parent::setAbs(true);
		parent::setDoors(4);
	}
	
}