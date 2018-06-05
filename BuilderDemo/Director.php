<?php

namespace BuilderDemo;

class Director
{
    public function build(BuilderInterface $builder) : Structure
    {
        $builder->createStructured();

        $builder->addContact();

        $builder->addGeo();

        $builder->addReview();

        return $builder->getStructured();
    }

}