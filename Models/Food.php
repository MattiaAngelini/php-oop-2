<?php 

require_once __DIR__ . 'Products.php'

class Food extends Product {
    public $weight;
    public $ingredients;

    
    public function __construct($name, $price, $category, $ingredients){
    
    }

}


