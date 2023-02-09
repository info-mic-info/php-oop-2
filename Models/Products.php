<?php
class Products
{
    public $title;
    public $price;
    public $image;
    public $race;

    public function __construct($title, $price, $image, $race)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->race = $race;
    }
}
