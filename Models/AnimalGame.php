<?php

class AnimalGame extends Products
{
    public $description;
    public $dimension;

    public function __construct($title, $race, $price, $image, $description, $dimension)
    {
        parent::__construct($title, $race, $price, $image);
        $this->description = $description;
        $this->dimension = $dimension;
    }
}
