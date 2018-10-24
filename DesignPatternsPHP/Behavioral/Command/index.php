<?php
namespace DesignPatterns\Behavioral\Command;


class index{
	public function __construct() {
		$invoker = new Invoker();
		$receiver = new Receiver();

		$invoker->setCommand(new HelloCommand($receiver));
		$invoker->run();
		echo $receiver->getOutput();
	}
}

new index();