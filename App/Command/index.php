<?php

interface Order {
	public function execute();

	public function getName();
}

class PizzaChef {
	public function makePizza() {
		echo 'Making a pizza' . "\n";
	}
}

class SteakChef {
	public function makeSteak() {
		echo 'Making a steak' . "\n";
	}
}

class Pizza implements Order {

	private $chef;

	public function __construct( PizzaChef $chef ) {
		$this->chef = $chef;
	}

	public function execute() {
		$this->chef->makePizza();
	}

	public function getName() {
		return "pizza";
	}
}

class Steak implements Order {

	private $chef;

	public function __construct( SteakChef $chef ) {
		$this->chef = $chef;
	}

	public function execute() {
		$this->chef->makeSteak();
	}

	public function getName() {
		return "steak";
	}
}

class Waiter {
	private $orders = [];

	public function takeOrder( Order $order ) {
		echo "Waiter take a new order " . $order->getName() . "\n";
		$this->orders[] = $order;

	}
}

class Customer {
	public function __construct() {
		// Invoker
		$waiter = new Waiter();

		// Receivers
		$pizzaC = new PizzaChef();
		$steakC = new SteakChef();

		// Commands
		$pizza = new Pizza( $pizzaC );
		$steak = new Steak( $steakC );


		$waiter->takeOrder( $pizza );
		$waiter->takeOrder( $steak );
	}
}


new Customer();