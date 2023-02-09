<?php

class AnimalFood extends Products
{
    public $weight;
    public $ingredients;

    public function __construct($title, $race, $price, $image, $weight, $ingredients)
    {
        parent::__construct($title, $race, $price, $image);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
