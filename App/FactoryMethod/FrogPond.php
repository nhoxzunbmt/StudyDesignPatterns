<?php
namespace App\FactoryMethod;

class FrogPond {
	/**
	 * @return mixed
	 */
	public function create($name) {
		$duck = new Frog();
		$duck->setName('Duck#'.$name);
		return $duck;
	}
}