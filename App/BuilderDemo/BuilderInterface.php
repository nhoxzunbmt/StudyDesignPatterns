<?php

namespace BuilderDemo;

interface BuilderInterface
{
    public function createStructured();

    public function addReview();

    public function addGeo();

    public function addContact();

    public function getStructured(): Structure;
}