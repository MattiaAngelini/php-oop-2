<?php
require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Categories.php';
require_once __DIR__ . '/Traits/MadeIn.php';
require_once __DIR__ . '/Db/Db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/styles.css"  rel="stylesheet" >
    <title>Negozio di animali</title>
</head>
<body>
    <header>
        <h1 class="text-center">Negozio di animali</h1>
    </header>

    <main>
        <div class="container d-flex">
            <div class="row row-cols-3">
                <?php foreach ($products as $product) { ?>
                    <?php
                        $className = get_class($product);
                        $productType = 'Prodotto generico';
                        if($className === 'Food') {
                            $productType = 'Cibo';
                        } elseif($className === 'Game') {
                            $productType = 'Gioco';
                        } elseif($className === 'Kennel') {
                            $productType = 'Cuccia';
                        }
                    ?>

                    <div class="col">
                        <div class="card my-2">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name; ?></h5>
                                <?php if($product->description) { ?>
                                    <div class="card-text">Descrizione: <?php echo $product->description; ?></div>
                                <?php } ?>
                                <div class="card-text">Prezzo: <?php echo $product->price; ?> Euro</div>
                                <div class="card-text">Tipo di prodotto: <?php echo $productType ?></div>
                                <div class="card-text">Categoria: <?php echo $product->category->name; ?> 
                                 
                                </div>
                                
                                <?php if($className === 'Food') { ?>
                                    <div>Ingredienti: <?php echo implode(', ', $product->ingredients); ?> </div>
                                <?php } ?>
                                <img src="<?php echo $product->category->image; ?>">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>