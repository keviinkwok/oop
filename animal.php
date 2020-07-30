<?php

class Animal {
  public $legs= 2;
  public $nama;
  public $cold_blooded = "False";

  public function __construct($nama){
    $this->nama= $nama;
    $this->legs;
  }
  public function get_leg($legs){
    $this->legs= $legs;
  }
  public function get_cold_blooded($cold_blooded){
    $this->cold_blooded;
  }
}

class Frog extends Animal{
    
    public function jump(){
        echo "hop hop";
    }
}

class Ape extends Animal{
    
    public function yell(){
        echo "Auooo";
    }
}


