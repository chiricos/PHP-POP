<?php

 // localhost/php/index.php?action=clases

/*
function autoload($clase){
    include "clases/".$clase.".php";
}
*/

function autoload($clase){
    include $_GET['action']."/".$clase.".php";
}

spl_autoload_register('autoload');

Persona::mostrar('cargo');
Auto::mostrar('drawde');


?>