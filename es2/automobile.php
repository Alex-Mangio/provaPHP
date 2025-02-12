<?php
require_once("veicolo.php");

class Automobile extends Veicolo implements JsonSerializable{
    
    private $modello;

    public function __construct($marca, $anno, $modello){
        parent::__construct($marca, $anno);
        $this->modello = $modello;
    }

    public function setModello($modello):void{
        $this->modello = $modello;
    }

    public function getModello():String{
        return $this->modello;
    }

    public function stampaAuto():void{
        echo "{$this->getMarca()} {$this->getAnno()} {$this->modello} <br>";
    }

    public function jsonSerialize():array{
        return [
            "marca" => parent::getMarca(),
            "anno" => parent::getAnno(),
            "modello" => $this->modello
        ];
    }
}
?>