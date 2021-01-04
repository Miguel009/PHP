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

/*aqui lo que podemos ver es como manipular o cambiar una variable ene este caso 
se debe colocar el signo & para que se pueda modificar una variable global */
$x = 10;

function anadirPorValor($x)
{
    $x+=5;
}

function anadirReferencia(&$x)
{
    $x+=10;
}

anadirPorValor($x);
echo "el valor es : ". $x;

anadirReferencia($x);
echo "el valor es : ". $x;


?>