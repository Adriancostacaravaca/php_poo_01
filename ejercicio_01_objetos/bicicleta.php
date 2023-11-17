<?php

include_once("vehiculo.php");
Class Bicicleta extends Vehiculo {
    private $pegatina;

    public function __construct($mat, $peg)
    {
        $this->pegatina=$peg;
        parent::__construct($mat);
    }


    public function hacercaballito(){
        return "La bicicleta realiza un caballito";
    }

}


?>