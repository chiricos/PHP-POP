<?php

    trait Persona{

        public $nombre;


        public function mostrarNombre()
        {
            echo $this->nombre;
        }

        abstract function asignarNombre($nombre);
    }

    trait Trabajador{

        protected function mensaje()
        {
            echo " Mi nombre es: ";
        }
    }

    Class Personas{
        use Persona, Trabajador;

        public function asignarNombre($nombre)
        {
            $this->nombre = $nombre.self::mensaje();
        }
    }

$persona = new Personas();
$persona->asignarNombre('drawde');
echo $persona->mostrarNombre();
?>
