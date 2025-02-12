<?php
class Veicolo{

    private $marca;
    private $anno;

    public function __construct($marca, $anno){
        $this->marca = $marca;
        $this->anno = $anno;
    }

    public function setMarca($marca):void{
        $this->marca = $marca;
    }

    public function getMarca():String{
        return $this->marca;
    }

    public function setAnno($anno):void{
        $this->anno = $anno;
    } 

    public function getAnno():String{
        return $this->anno;
    }
}
?>