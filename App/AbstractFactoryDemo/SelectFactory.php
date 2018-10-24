<?php
namespace AbstractFactoryDemo;

class SelectFactory extends AbstractFactory {

    public function createElement($type)
    {
        if($type == 'select'){
            return new Select();
        }
        if($type == 'select2'){
            return new Select2();
        }
    }
}