<?php

namespace BuilderDemo;

abstract class Structure
{
    private $data;

    public function setPart($key,$part){
        $this->data[$key] = $part;
    }
}