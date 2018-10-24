<?php
namespace App\FactoryMethod;

class Bicycle implements VehicalInterface {
	private $color;

	/**
	 * @return mixed
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * @param mixed $color
	 */
	public function setColor( $color ) {
		$this->color = $color;
	}

}