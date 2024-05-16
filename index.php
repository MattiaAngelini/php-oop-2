<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Categories.php';
require_once __DIR__ . '/Traits/MadeIn.php';


$dogs = new Category('Cani', 'https://picsum.photos/200/300');
$cats = new Category('Gatti', 'https://picsum.photos/200/300');
$collare = new Product('Collare', 9.99, $dogs);
$crocchette = new Food('Crocchette', 12.00, $dogs, 1.0, ['carne', 'carote']); 
$crocchette->description = 'Le crocchette più buone del mondo';
$pallina = new Game('Pallina', 4.99, $cats);
$pallina->setCountry('China');
$luxuryImperialKennel = new Kennel('Cuccia Luxury Imperial', 1100.00, $cats);
$luxuryImperialKennel->size = 5;
$luxuryImperialKennel->setCountry('Bangladesh');

$products = [
    $collare,
    $crocchette,
    $pallina,
    $luxuryImperialKennel
];
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
