<?php

    abstract class Molde{

        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();

    }

    class Persona extends Molde{

        private $mensaje =  "hola gente ";

        public function mostrar(){
            print $this->mensaje;
        }

        public function ingresarNombre($nombre,$username = " zaid "){
            $this->nombre = $nombre ." ".$username;
        }

        public function obtenerNombre(){
           print $this->nombre;
        }

    }

$obj = new Persona();
$obj->ingresarNombre('drawde','riah');
$obj->obtenerNombre();

?>