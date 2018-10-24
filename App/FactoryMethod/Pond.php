<?php
namespace App\FactoryMethod;

class Pond {
	/**
	 * @return mixed
	 */
	public function create($type) {
		switch ($type){
			case 'duck':
				$duck = new DuckPond();
				$duck = $duck->create('1');
				return $duck;
				break;
			case 'frog':
				$frog = new FrogPond();
				$frog = $frog->create('1');
				return $frog;
				break;
		}
	}
}




