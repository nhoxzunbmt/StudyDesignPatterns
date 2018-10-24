<?php
namespace App\FactoryMethod;

class DuckPond {
	/**
	 * @return mixed
	 */
	public function create($name) {
		$duck = new Duck();
		$duck->setName('Duck#'.$name);
		return $duck;
	}
}