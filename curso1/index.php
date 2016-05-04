<?php

class Persona{

    /*
     * ATRIBUTOS
     */

    public $nombre = "Pedro";

    /*
     * METODOS
     */

    public function hablar($mensaje){
        echo $mensaje;
    }
}

$persona = new Persona();
echo $persona->nombre.'<br>';
echo $persona->hablar('hola mundo');

?>