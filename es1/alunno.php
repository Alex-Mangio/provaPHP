<?php
require_once("voto.php");
require_once("indirizzo.php");

class Alunno implements JsonSerializable{

    private $nome;
    private $cognome;
    private $eta;
    private $voti = [];
    private $indirizzi = [];

    public function __construct($nome, $cognome, $eta,$voti,$indirizzi){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->eta=$eta;
        $this->voti=$voti;
        $this->indirizzi=$indirizzi;
    }

    public function setNome($nome):void{
        $this->nome=$nome;
    }
    public function getNome():String{
        return $this->nome;
    }

    public function setCognome($cognome):void{
        $this->cognome=$cognome;
    }

    public function getCognome():String{
        return $this->cognome;
    }

    public function setEta($eta):void{
        $this->eta=$eta;
    }

    public function getEta():String{
        return $this->eta;
    }
    
    public function setVoti($voti):void{
        $this->voti=$voti;
    }

    public function getVoti():array{
        return $this->voti;
    }

    public function setIndirizzi($indirizzi):void{
        $this->indirizzi=$indirizzi;
    }

    public function getIndirizzi():array{
        return $this->indirizzi;
    }

    public function stampaAlunno():void{
        echo "{$this->nome} {$this->cognome} {$this->eta} <br>";
    }

    public function jsonSerialize():array{
        return [
            "nome" => $this->nome,
            "cognome" => $this->cognome,
            "eta" => $this->eta,
            //"voti" => $this->voti,
            //"indirizzi" => $this->indirizzi
        ];
    }
}
?>