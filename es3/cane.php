<?php
require_once("animale.php");

class Cane extends Animale{

    public function __construct(){
        echo $this->verso();
    }

    public function verso():String{
        return "Il cane fa BAU";
    }
}
?>