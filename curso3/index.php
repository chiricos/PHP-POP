<?php

class Loteria{

    /*
     * ATRIBUTOS
     */

    public $numero;
    public $intentos;
    public $resultado = false;

    /*
     * METODOS
     */

    public function __construct($numero,$intentos){
        $this->numero =$numero;
        $this->intentos = $intentos;
    }

    public function sortear(){
        $minimo = $this->numero/2;
        $maximo = $this->numero *2;
        for($i =0; $i < $this->intentos; $i++){
            $int = rand($minimo,$maximo);
            self::intentos($int);
        }
    }

    public function intentos($int){
        if($int == $this->numero){
            echo '<br>'.$int.'=='.$this->numero.'<br><br>';
            $this->resultado=true;
        }else{
            echo $int. '!= '.$this->numero.'<br>';
        }
    }

    public function __destruct(){
        if($this->resultado){
            echo "Felicidates, has acertado en ".$this->intentos." intentos";
        }else{
            echo "que lastima, has perdido en ".$this->intentos." intentos";
        }
    }

}

$loteria = new Loteria(100,5);
$loteria->sortear();
?>