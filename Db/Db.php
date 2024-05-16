<?php

$dogs = new Category('Cani', 'https://picsum.photos/200/300');
$cats = new Category('Gatti', 'https://picsum.photos/200/300');

$collare = new Product('Collare', 9.99, $dogs);
$crocchette = new Food('Crocchette', 12.00, $dogs, 1.0, ['carne', 'carote']);
$crocchette->description = 'Le crocchette più buone del mondo';

$pallina = new Game('Pallina', 4.99, $cats);
$pallina->setCountry('Italia');

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
