<?php 
class Voto{
    
    private $voto;
    private $materia;
    private $descrizione;

    public function __construct($voto,$materia,$descrizione){
        $this->voto;
        $this->materia;
        $this->descrizione;
    }

    public function setVoto($voto):void{
        $this->voto=$voto;
    }

    public function getVoto():String{
        return $this->voto;
    }

    public function setMateria($materia):void{
        $this->materia=$materia;
    }

    public function getMateria():String{
        return $this->materia;
    }
    
    public function setDescrizione($descrizione):void{
        $this->descrizione=$descrizione;
    }

    public function getDescrizione():String{
        return $this->descrizione;
    }
}