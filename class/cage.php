<?php

include_once __DIR__ . '/product.php';

class Cage extends Product{
    public $material;
    public $size;

    public function __construct(
        String $image,
        String $name,       
        Category $category,
        Float $price,

        String $material,
        String $size
    ){
        $this->material = $material;
        $this->size = $size;
        parent::__construct($image,$name,$category,$price,$material,$size);
    }
}

?>