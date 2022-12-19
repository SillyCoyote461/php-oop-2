<?php
    include_once __DIR__ . '/class/categories.php';
    include_once __DIR__ . '/class/food.php';
    include_once __DIR__ . '/class/cage.php';
    include_once __DIR__ . '/class/toy.php';
    


    $categories=[
        'cane' => new Category('Cane','sample'),
        'gatto' => new Category('Gatto','sample'),
        'uccello' => new Category('Uccello','sample'),
    ];
    
    $products=[
        new Food('Royal Canin', $categories['cane'], 43.99, 545, 'prosciutto, riso'),
        new Food('Almo Nature', $categories['cane'], 44.99, 600, 'manzo, cereali'),
        new Cage('Voliera Ferplast Bella Casa', $categories['uccello'], 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm'),
        new Toy('Topini di peluche Trixie', $categories['gatto'], 4.99, 'Morbido con codina in corda', '8,5 cm x 10 cm')
    ];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($products)
    ?>
</body>
</html>