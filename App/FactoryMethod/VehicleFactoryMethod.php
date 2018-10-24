<?php
namespace App\FactoryMethod;

abstract class VehicleFactoryMethod{
	const CHEAP = 'cheap';
	const FAST = 'fast';

	abstract static protected function createVehicle($type) : VehicalInterface;

	public function create($type) : VehicalInterface{
		$obj = $this->createVehicle($type);
		$obj->setColor('black');
		return $obj;
	}
}