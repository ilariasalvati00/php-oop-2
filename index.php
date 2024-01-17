<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once __DIR__ . '/data.php';
    ?>
    
    <header>
        <img src="https://www.animalfoodlaikasrl.it/img/animal-food-logo-1576267960.jpg" alt="">
    </header>
    <main>
    <?php foreach ($prodotti_negozio as $prodotto){ ?>
        <div class="card">
            <img src="<?php echo $prodotto->picture; ?>" alt="">
            <h2><?php echo $prodotto->nome; ?></h2>
            <p><?php echo $prodotto->brand; ?></p>
            <p><?php echo $prodotto->getCategory(); ?></p>
            <?php if($prodotto instanceof Food){ ?>
                <p>Cibo per animali</p>
            <?php } elseif ($prodotto instanceof Kennel){?>
                <p>Cuccia</p>
            <?php } elseif ($prodotto instanceof Toy){?>
                <p>Giocattolo</p>
            <?php } else{?>
                <p>Prodotto generico</p>
            <?php } ?>
            <p><?php echo $prodotto->price; ?></p>

            <?php if($prodotto instanceof Food){ ?>
                <p>Data di scadenza:  <?php echo $prodotto->expiration_date; ?></p>
            <?php } elseif ($prodotto instanceof Kennel){?>
                <p><?php echo $prodotto->color; ?></p>
            <?php } ?>

        </div>
    <?php } ?>
    </main>
   



   
    


</body>
</html>