<?php
//ciclo foreach
$juego = array('equipos'=>'magikarp', 'equipo2'=>'totodile', 'equipo3'=>'cranidos');

foreach ($juego as $datos => $valor) {
    echo $datos." con el loco: ". $valor; 
    echo "<br>";
}
//Funciiones
function nueva($nombres){
    echo "Hola señor $nombres <br>";
}

nueva("Miguel");
nueva("Miguel2");
nueva("Miguel3");

function nueva2(
    $nombres ='miguel',
    $apellido = 'cruzada',
    $edad = 232
    ){
    echo "Hola señor $nombres $apellido de edad $edad <br>";
}

nueva2("nuevo");
?>