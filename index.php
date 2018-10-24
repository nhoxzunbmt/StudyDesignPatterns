<?php

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';



//$dirs = array_filter(glob('App/*'), 'is_dir');
//
//foreach ( $dirs as $dir ) {
//	$href = '/'.$dir;
//
//	echo "<a href='{$href}'>{$dir}</a><br>";
//
//}


$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));
$invoker->run();
echo $receiver->getOutput();