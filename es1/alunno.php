<?php
class Alunno implements JsonSerializable{

    private $nome;
    private $cognome;
    private $eta;
    public function __construct($nome, $cognome, $eta){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->eta=$eta;
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

    public function stampaAlunno():void{
        echo "{$this->nome} {$this->cognome} {$this->eta} <br>";
    }

    public function jsonSerialize():array{
        return [
            "nome" => $this->nome,
            "cognome" => $this->cognome,
            "eta" => $this->eta
        ];
    }
}
?>