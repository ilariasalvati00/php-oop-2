<?php

require_once __DIR__ . '/Category.php';

class Product{
    public $price;
    public $brand;
    public $picture;
    public $nome;

    use Category;


    public function __construct($nome, $prezzo, $categoria, $marchio, $immagine){
        $this->price = $prezzo;
        $this->category = $categoria;
        $this->brand = $marchio;
        $this->picture = $immagine;
        $this->nome = $nome;
    }

}