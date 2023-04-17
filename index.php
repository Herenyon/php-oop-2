<?php
require_once __DIR__ . "/Models/accessories.php";
require_once __DIR__ . "/Models/toys.php";
require_once __DIR__ . "/Models/food.php";

class Products
{
    public $dog;
    public $cat;
    public $bird;
    public $fish;
    public function __construct($_type)
    {
        $this->dog = $_type;
    }
}
$dog = new Toys();

var_dump($dog);
