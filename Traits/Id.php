<?php

trait Id
{
    private $id;

    public function get_id()
    {
        return $this->id;
    }
    public function set_id($_id)
    {
        $this->id = $_id;
    }
}
