<?php
declare( strict_types=1 );

namespace App;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\JsonText;
use DesignPatterns\Creational\AbstractFactory\Text;

require __DIR__ . '/../vendor/autoload.php';

class index {
	public function main() {

		$JsonFactory = new JsonFactory();
		echo $JsonFactory->createText("Hello");
	}
}

$obj = new index();
$obj->main();