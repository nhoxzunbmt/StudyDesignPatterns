<?php

namespace App\FactoryMethod;

class GermanFactory extends VehicleFactoryMethod {

	public static function createVehicle( $type ): VehicalInterface {
		switch ( $type ) {
			case parent::FAST:
				$obj = new CarMercedes();
				$obj->addTurnBoot();
				$obj->setColor('Bicycle color white');
				return $obj;
				break;
			case parent::CHEAP:
				$obj = new Bicycle();
				$obj->setColor('Bicycle color black');
				return $obj;
				break;
		}
	}
}