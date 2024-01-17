<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Food.php';

$prodotti_negozio = [
    new Food("Natural Trainer Sterilised Salmone", "10.99", Product::$cat, "Natural Trainer", "https://arcaplanet.vtexassets.com/arquivos/ids/248329-200-200/trainer-natural-gatto-sterilized-salmone.jpg?v=637455046340470000", "2024-05-01"),
    new Toy("Topo con corda", "1.99", Product::$dog, "Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/273003/TX-GIOCO-GATTO-TOPO-PER-STIPITI-DI-PORTE-CM.8---19.jpg?v=637919129776830000")
    ];
