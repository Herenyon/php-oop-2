<?php
class Products
{

    private $id;
    private $name;
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
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($_id)
    {
        $this->id = $_id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($_name)
    {
        $this->name = $_name;
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
}
