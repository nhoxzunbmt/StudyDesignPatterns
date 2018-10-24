<?php
namespace App\FactoryMethod;

class WaterLily {
	private $name;

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	public function setName( $name ) {
		$this->name = $name;
	}

	public function grow() {
		return "The WaterLily {$this->getName()} grows";
	}
}
