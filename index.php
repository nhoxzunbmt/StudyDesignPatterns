<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

use AbstractFactoryDemo\InputFactory;
use AbstractFactoryDemo\SelectFactory;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\TruckBuilder;


$input_factory = new InputFactory();
$input_factory = $input_factory->createElement('text');
$type = $input_factory->showType();
echo $type . '<br>';


$select_factory = new SelectFactory();
$select_factory = $select_factory->createElement('select2');
$type = $select_factory->showType();
echo $type . '<br>';


$news_builder = new \BuilderDemo\NewsBuilder();
$news_builder->createStructured();
$news_builder->addReview();
$news_builder->addGeo();
$news_builder->addContact();
$news = $news_builder->getStructured();
echo '<pre>';
var_dump($news);

$truckBuilder = new TruckBuilder();
$newVehicle = (new Director())->build($truckBuilder);

echo '<pre>';
var_dump($newVehicle);


