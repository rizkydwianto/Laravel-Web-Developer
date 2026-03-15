<?php
require_once ("animal.php");

class Ape extends animal {
  public $yell = "Auooo";
  public $legs = 2;

    public function __construct($str) {
     parent::__construct($str); // memanggil constructor Animal
  }
}
?>