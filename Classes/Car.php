<?php


class Car
{
    public $id;
    public $name;
    public $brand;
    public $price;
    public $description;
    public $picture;
    public $category_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->category_id, 'integer');
    }
}