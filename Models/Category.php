<?php

trait Category{

    public static $dog = "Cane";
    public static $cat = "Gatto";

    protected $category;

    public function getCategory(){
        return $this->category;
    }
}
