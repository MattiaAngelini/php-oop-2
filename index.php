<?php

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/CatsProducts.php';
require_once __DIR__ . '/Models/DogsProducts.php';
require_once __DIR__ . '/Models/Categories.php';


$dogsProductOne = new DogsProducts('croccantini', 'food', 9.99);
$catsProductOne = new CatsProducts('croccantini', 'food', 9.99);
var_dump($dogsProductOne,$catsProductOne);


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
</body>
</html> 