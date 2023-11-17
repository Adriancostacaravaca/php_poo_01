<?php

    Class Vehiculo {

        private $matricula;
        private $modelo;
        private $precio;
        private $kilometraje = 0;
        private static $kilometrajetotal = 0;


        public function __construct($mat)
        {
            $this->matricula= $mat;
        }

        public function getVehiculosCreados()
        {

        }
        
        public function getKilometraje()
        {
            return $this->kilometraje;
        }

        public static function getKilometrajeTotal()
        {
            return vehiculo::$kilometrajetotal;
        }

        public function mover($km)
        {
            $this->kilometraje += $km;
            vehiculo::$kilometrajetotal += $km;
            $aux = ($km ===1) ? "km" : "kms";
            return "Ha recorrido $km $aux y ya van " . Vehiculo::$kilometrajetotal . " $aux recorridos entre todos los vehículos";
        }


    }






?>