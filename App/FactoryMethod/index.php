<?php
declare( strict_types=1 );

namespace App\FactoryMethod;

use App\FactoryMethod\Shape;

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require __DIR__ . '/../../vendor/autoload.php';

class index {
	public function main() {


//$shape = new \App\FactoryMethod\ShapeFactory();
//$circle = $shape->getShape(Shape::Rectangle);
//$circle->draw();

//
//		$g   = new GermanFactory();
//		$obj = $g->createVehicle( VehicleFactoryMethod::CHEAP );
//		$obj->setColor( 'blue' );
//
//		echo $obj->getColor();
//
//		echo GermanFactory::createVehicle( VehicleFactoryMethod::CHEAP )->getColor();

		$pond = new Pond();
		$duck = $pond->create('duck');
		echo $duck->getName();

		$pond = new Pond();
		$duck = $pond->create('frog');
		echo $duck->getName();

		echo PHP_EOL;
	}
}

$obj = new index();
$obj->main();