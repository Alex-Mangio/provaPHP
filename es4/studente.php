<?php
require_once("persona.php");

class Studente extends Persona{

    private $matricola;

    public function __construct($nome, $cognome, $matricola){
        parent:: __construct($nome, $cognome);
        $this->matricola = $matricola;
    }

    public function getMatricola():String{
        return $this->matricola;
    }

    public function presentati():String{
        return parent::presentati()."".$this->getMatricola();
    }
}
?>