<?php

class Category
{

    private $name;
    private $icon;
    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function set_id($_name)
    {
        $this->name = $_name;
    }
    public function get_icon()
    {
        return $this->icon;
    }
    public function set_name($_icon)
    {
        $this->icon = $_icon;
    }
}
