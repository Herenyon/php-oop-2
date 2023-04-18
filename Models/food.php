<?php

require_once __DIR__ . '/Product.php';
class Food extends Products
{
    private $ingridients;
    public function get_ingridients()
    {
        return $this->ingridients;
    }
    public function set_ingridients($_ingridients)
    {
        $this->ingridients = $_ingridients;
    }
}
