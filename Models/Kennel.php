<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{
    public $color;

    public function __construct($nome, $prezzo, $categoria , $marchio , $immagine , $color)
    {
        parent::__construct($nome, $prezzo, $categoria, $marchio , $immagine);
        this->color = $color;
    }
}