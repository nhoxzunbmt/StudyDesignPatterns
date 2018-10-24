<?php

namespace App\FactoryMethod;

class ShapeFactory {
	public function getShape($type){
		switch ($type){
			case 1 :
				return new Circle();
				break;
			case 2 :
				return new Rectangle();
				break;
			default:
				return null;
				break;
		}
	}
}