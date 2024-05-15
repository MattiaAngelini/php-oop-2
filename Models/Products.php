<?php

class Products {
    public $name;
    public $categories;
    public $price;

    public function __construct($name, $categories, $price) {
        $this->name = $name;
        $this->categories = $categories;
        $this->price = $price;
    }
}


?>
