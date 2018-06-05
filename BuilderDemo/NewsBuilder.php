<?php

namespace BuilderDemo;

class NewsBuilder implements BuilderInterface
{
    /**
     * @var News
     */
    private $news;

    public function createStructured()
    {
        $this->news = new News();
    }

    public function addReview()
    {
        $this->news->setPart('review', [
            'good',
            'bad'
        ]);
    }

    public function addGeo()
    {
        $this->news->setPart('geo', 'HCM');
    }

    public function addContact()
    {
        $this->news->setPart('contact', 'News');
    }

    public function getStructured(): Structure
    {
        return $this->news;
    }
}