<?php
namespace App\FactoryMethod;

class Frog {
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

	public function eat() {
		return "Frog {$this->name} is eating.";
	}

	public function speak( ) {
		return "Frog {$this->name} is speak Crooooaaaak.";
	}

	public function sleep( ) {
		return "Frog {$this->name} is sleep.";
	}
}
