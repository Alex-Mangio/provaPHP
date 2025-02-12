<?php
class Persona{

    private $nome;
    private $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function getNome():String{
        return $this->nome;
    }

    public function getCognome():String{
        return $this->cognome;
    }

    public function presentati():String{
        return "piacere sono {$this->nome} {$this->cognome} <br>";
    }
}
?>