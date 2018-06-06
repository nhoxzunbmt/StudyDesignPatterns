<?php

namespace BuilderPerson;

interface PersonBuilderInterface
{
    public function setGender();

    public function setEmployed();

    public function getResult();
}