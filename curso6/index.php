<?php

class Pagina{

    /*
     * ATRIBUTOS
     */

    public $nombre = "hola drawde";
    public static $url = "www.google.com.co";

    /*
     * METODOS
     */

    public function bienvenida(){
        echo "Bienvenidos a <b>".$this->nombre. "</b> la pagina es ".Pagina::$url."<br>";
    }

    public static function bienvenida2(){
        echo "bienvenidos a ".self::$url;
    }

}

class Web extends Pagina{

}

$pagina = new Pagina();
$pagina->bienvenida();
Web::bienvenida2();

?>