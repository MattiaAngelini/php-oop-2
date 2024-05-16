<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../Traits/MadeIn.php'; 

class Kennel extends Product {
    use MadeIn;
    public $size;
}
?>
