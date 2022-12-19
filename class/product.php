<?php


class Product{
    public $image;
    public $name;  
    public $category;
    public $price;

    public function __construct(
        String $image,
        String $name,       
        Category $category,
        Float $price
    ) {
        $this->image = $image;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
}


?>