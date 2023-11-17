<?php

include_once("vehiculo.php");
Class Coche extends Vehiculo {
    private $grosorRueda = 60;

    public function __construct($mat)
    {
        parent::__construct($mat);
    }

    public function quemarRueda($tiempo){

        $milimetros=$tiempo * 0.1;
        $this->grosorRueda -= $milimetros;
        $aux = ($tiempo ===1) ? "segundo" : "segundos";
        return "El coche quema rueda $tiempo $aux y le quedan $this->grosorRueda milímetros";
    }


}


?>