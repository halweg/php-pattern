<?php
namespace Facade\ProductReader\v1;

class Product
{
    private $id;
    private $name;
    
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}