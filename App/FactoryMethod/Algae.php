<?php
namespace App\FactoryMethod;

class Algae {
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
		return "The Algae {$this->getName()} soaks up the sun and grows";
	}
}
