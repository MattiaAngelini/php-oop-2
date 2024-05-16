<?php
require_once __DIR__ . '/Products.php';

class Food extends Product {
    public $weight;
    public $ingredients;

    public function __construct($name, $price, $category, $weight, $ingredients) {
        parent::__construct($name, $price, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
?>
