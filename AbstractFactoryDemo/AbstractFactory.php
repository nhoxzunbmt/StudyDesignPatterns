<?php
namespace AbstractFactoryDemo;

abstract class AbstractFactory{
    abstract public function createElement($type);
}