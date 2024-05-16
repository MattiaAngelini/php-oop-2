<?php

class Products {
    public $name;
    public $description;
    public $price;
    public $category;

    public function __construct($name, $price, Category $category) {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
    }
}

?>
