<?php
    include_once __DIR__ . '/class/categories.php';
    include_once __DIR__ . '/class/food.php';
    include_once __DIR__ . '/class/cage.php';
    include_once __DIR__ . '/class/toy.php';
    


    $categories=[
        'cane' => new Category('Cane','fa-solid fa-dog'),
        'gatto' => new Category('Gatto','fa-solid fa-cat'),
        'uccello' => new Category('Uccello','fa-solid fa-dove'),
    ];
    
    $products=[
        new Food('https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg','Royal Canin', $categories['cane'], 43.99, 545, 'prosciutto, riso'),
        new Food('https://shop-cdn-m.mediazs.com/bilder/fai/scorta/almo/nature/x/g/6/800/69357_pla_almonature_huehnerschenkel_6.jpg','Almo Nature', $categories['cane'], 44.99, 600, 'manzo, cereali'),
        new Cage('https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/400/71860_pla_vogelvoliere_bellacasa_back_2.jpg','Voliera Ferplast Bella Casa', $categories['uccello'], 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm'),
        new Toy('https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg','Topini di peluche Trixie', $categories['gatto'], 4.99, 'Morbido con codina in corda', '8,5 cm x 10 cm')
    ];
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h2>Boolshop</h2>
        <h3>I nostri prodotti</h3>
    </header>
    <main>
        <?php foreach ($products as $elem) { ?>

            <div class="cont">
                <div class="card">
                    <section class="prev">
                        <img src="<?php echo $elem -> image ?>" alt="imagine">
                    </section>
                    <section>
                       <h2><?php echo $elem -> name ?></h2> 
                       <div>
                        <i class="<?php echo $elem -> category -> icon ?>"></i> <?php echo $elem -> category -> name ?>
                       </div>
                       <p>
                        Prezzo: € <?php echo $elem -> price ?>
                       </p>
                       <!-- if == food -->
                       <?php if(get_class($elem) == "Food"){?>
                        <p>Peso netto:<?php echo $elem -> weight ?>g</p>
                        <p>Ingredienti: <?php echo $elem -> ingredients?></p>
                        <!-- elseif == toy -->
                        <?php } elseif(get_class($elem) == "Toy"){ ?>
                        <p>Caratteristiche:<?php echo $elem -> characteristics?></p>
                        <p>Ingredienti: <?php echo $elem -> size?></p>
                        <!-- else -->
                        <?php } else{?>
                        <p>Caratteristiche:<?php echo $elem -> materials?></p>
                        <p>Ingredienti: <?php echo $elem -> size?></p>
                        <?php } ?>
                    </section>
                    
                </div>
            </div>
                
        <?php }; ?>
    </main>
</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        width: 100vw;
        height: 100vh;
        padding-top:5vh;
    }

    header, main{
        width: 70vw;
        margin: auto;
    }

    header h2{
        margin-bottom: 10px;

    }

    main{
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap:wrap;
        padding-top: 30px;
    }

    .cont{
        flex-basis:calc((100% / 3) - 20px);

    }

    .card{
        margin: auto;
        width: 350px;
        border: 1px solid black;
        border-radius: 6px;
        padding: 5px;
    }
    .prev{
        padding: 5px
    }

    .prev img{
        width: 100%;
        aspect-ratio: 1/1;
    }

</style>