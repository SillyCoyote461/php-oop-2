<?php

include_once __DIR__ . '/product.php';

class Toy extends Product{
    public $characteristics;
    public $size;

    public function __construct(
        String $image,
        String $name,       
        Category $category,
        Float $price,
        
        String $characteristics,
        String $size
    ){
        $this->characteristics = $characteristics;
        $this->size = $size;
        parent::__construct($image,$name,$category,$price,$characteristics,$size);
    }
}

?>