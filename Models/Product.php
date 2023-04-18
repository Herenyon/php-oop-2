<?php
require_once __DIR__ . '/../Traits/Name.php';
require_once __DIR__ . '/../Traits/Id.php';

class Products
{
    use Id;
    use Name {
        get_name as get_trait_name;
    }

    // private $id;

    private $description;
    private $category;
    private $price;
    private $image;

    public function __construct($_id, $_name, $_description, $_category, $_price, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }


    public function get_description()
    {
        return $this->description;
    }

    public function set_description($_description)
    {
        $this->description = $_description;
    }
    public function get_category()
    {
        return $this->category;
    }
    public function set_category($_category)
    {
        $this->category = $_category;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function set_price($_price)
    {
        $this->price = $_price;
    }
    public function get_image()
    {
        return $this->image;
    }
    public function set_image($_image)
    {
        $this->image = $_image;
    }
    public function get_name()
    {
        return "Product: {$this->get_trait_name()}";
    }
}
