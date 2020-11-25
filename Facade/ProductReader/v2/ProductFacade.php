<?php


namespace Facade\ProductReader\v2;


class ProductFacade
{
    private $product = [];
    
    public function __construct($file)
    {
        $this->file = $file;
        $this->compile();
    }
    
    public function compile()
    {
        $lines =  getProductFromLines($this->file);
        foreach ($lines as $line) {
            $id = getProductIdFromLine($line);
            $name = getProductNameFromLine($line);
            $this->product[$id] = getProductObjFromId($id, $name);
        }
    }
    
    public function getProduct()
    {
        return $this->product;
    }
    
    public function getProductById($id)
    {
        return $this->product[$id];
    }
    
}

function getProductFromLines($file) {
    return file($file);
}

function getProductObjFromId($id, $name) {
    return new \Facade\ProductReader\v1\Product($id, $name);
}

function getProductNameFromLine($file) {
    $items = split("-", $file);
    if (count($items) > 1) {
        return $items[1];
    }
    return '';
}

function getProductIdFromLine($file) {
    $items = split("-", $file);
    if (count($items) > 0) {
        return $items[0];
    }
    return '';
}