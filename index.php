<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Categories.php';


$dogs = new Category('Dogs', 'image');

$cats = new Category('Cats', 'image');

$productOne = new Products('collare', 9.99, $dogs);

$croccantini = new Food('croccantini', 9.99, $cats, 10, 'fish');

$pallina = new Game('ball', 3, $dogs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
   
</body>
</html> 

