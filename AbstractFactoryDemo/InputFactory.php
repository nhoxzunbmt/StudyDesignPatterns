<?php
namespace AbstractFactoryDemo;

class InputFactory extends AbstractFactory{
    public function createElement($type)
    {
        if($type == 'text')
        {
            return new InputText();
        }

        if($type == 'hidden')
        {
            return new InputHidden();
        }
    }
}