<?php


class Product{
    public $name;   
    public $category;
    public $price;

    public function __construct(
        String $name,       
        Category $category,
        Float $price
    ) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
}


?>