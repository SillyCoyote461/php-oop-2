<?php

include_once __DIR__ . '/product.php';

class Food extends Product{
    private $weight;
    private $ingredients;

    public function __construct(
        string $name,       
        Category $category,
        Float $price,

        Float $weight,
        String $ingredients
    ){
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        parent::__construct($name,$category,$price,$weight,$ingredients);
    }
}

?>