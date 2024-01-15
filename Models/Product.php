<?php

require_once __DIR__ . '/Category.php';

class Product{
    public $price;
    public $category;
    public $brand;
    public $picture;


    public function __construct($prezzo, Category $categoria, $marchio, $immagine){
        $this->price = $prezzo;
        $this->category = $categoria;
        $this->brand = $marchio;
        $this->picture = $immagine;
    }


}