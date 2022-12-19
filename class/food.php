<?php

include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredients;

    public function __construct(
        String $image,
        String $name,       
        Category $category,
        Float $price,

        Int $weight,
        String $ingredients
    ){
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        parent::__construct($image,$name,$category,$price,$weight,$ingredients);
    }
}

?>