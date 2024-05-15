<?php

class Categories {
    public $food;
    public $snack;
    public $toys;

    public function __construct($food, $snack, $toys){
        $this->food = $food;
        $this->snack = $snack;
        $this->toys = $toys;
    }
}

$categoriesList = new Categories('food', 'snack', 'toys');

?>
