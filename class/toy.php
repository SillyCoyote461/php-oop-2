<?php

include_once __DIR__ . '/product.php';

class Toy extends Product{
    public $characteristics;
    public $size;

    public function __construct(
        string $name,       
        Category $category,
        Float $price,
        
        String $characteristics,
        String $size
    ){
        $this->characteristics = $characteristics;
        $this->size = $size;
        parent::__construct($name,$category,$price,$characteristics,$size);
    }
}

?>