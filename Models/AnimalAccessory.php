<?php

class AnimalAccessory extends Products
{
    public $material;
    public $dimension;

    public function __construct($title, $race, $price, $image, $material, $dimension)
    {
        parent::__construct($title, $race, $price, $image);
        $this->material = $material;
        $this->dimension = $dimension;
    }
}
