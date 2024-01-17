<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $expiration_date;

    public function __construct($nome, $prezzo , $categoria , $marchio , $immagine , $expiration_date)
    {
        parent::__construct($nome, $prezzo, $categoria, $marchio , $immagine);
        $this->expiration_date = $expiration_date;
    }
}