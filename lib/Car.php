<?php

class Car {
	private $wheels = 4;
	private $manufacturer;
	private $kilometrage;
	private $airbag;
	private $abs = false;
	private $doors;

	public function __construct() {
		$this->manufacturer = 'unknown';
		$this->doors = 2;
	}

	public function getWheels() {
		return $this->wheels;
	}

	public function setWheels($wheels) {
		$this->wheels = $wheels;
	}

	/**
	 * Retrourne une chaîne de caractère
	 * 
	 */

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function setManufacturer($name) {
		$this->manufacturer = $name;
	}

	public function getKilometrage() {
		return $this->kilometrage;
	}

	public function setKilometrage($km) {
		$this->kilometrage = $km;
	}

	/**
	 *	Retourne un booléen sur la disponibilité
	 *	des airbags
	 * 
	 * @return  {boolean} Are airbag available 
	 */

	public function getAirbag() {
		return $this->airbag;
	}

	/**
	 * Définition de la disponibilité des airbags
	 * 
	 * @param $available {boolean}
	 */
	public function setAirbag($available) {
		$this->airbag = $available;
	}

	public function getAbs() {
		return $this->abs;
	}

	public function setAbs($available) {
		$this->abs = $available;
	}

	public function getDoors() {
		return $this->doors;
	}

	public function setDoors($doors) {
		$this->doors = $doors;
	}

}