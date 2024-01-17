<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
    
    public function __construct($nome, $prezzo, $categoria, $marchio, $immagine)
    {
        parent::__construct($nome, $prezzo, $categoria, $marchio , $immagine);
    }
}