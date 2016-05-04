<?php

class Facebook{

    /*
     * ATRIBUTOS
     */

    public $nombre;
    public $edad;
    private $pass;

    /*
     * METODOS
     */

    public function __construct($nombre,$edad,$pass){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    public function verInformacion(){
        echo "Nombre: ". $this->nombre .'<br>';
        echo "Edad: ". $this->edad .'<br>';
        Facebook::cambiarPass("321");
        echo "Password: ". $this->pass .'<br>';
    }

    private function cambiarPass($pass){
        $this->pass = $pass;
    }
}

$facebook = new Facebook('drawde',23,1);
$facebook->verInformacion();

?>