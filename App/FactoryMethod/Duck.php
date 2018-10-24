<?php
namespace App\FactoryMethod;

class Duck {
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
		return "Duck {$this->name} is eating.";
	}

	public function speak( ) {
		return "Duck {$this->name} is speak.";
	}

	public function sleep( ) {
		return "Duck {$this->name} is sleep.";
	}
}
