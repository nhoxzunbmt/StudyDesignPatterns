<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use AbstractFactoryDemo\InputFactory;
use AbstractFactoryDemo\SelectFactory;


$input_factory = new InputFactory();
$input_factory = $input_factory->createElement('text');
$type = $input_factory->showType();
echo $type.'<br>';



$select_factory = new SelectFactory();
$select_factory = $select_factory->createElement('select2');
$type = $select_factory->showType();
echo $type.'<br>';