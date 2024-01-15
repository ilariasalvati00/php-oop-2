<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $expiration_date;

    public function setExpirationDate($data){
        $this->expiration_date = $data;
    }
}