<?php
//Variables
$nombres = 'Nuevos Nombres';/*Con poner comillas simples estamos diciendo que es un valor string*/
echo $nombres."<br/>";
/*en php no es necesario identificar las variables que si son string o numero solamente con el valor se sabra que tipo de variable es*/
$numero = 4;
echo "el numero es: $numero <br/>";
echo 'el numero es: '.$numero.'<br/>';
/*Con comilla dobles se pueden declarar variables con comillas simples se puede pero debe ser de otra manera*/
//Constantes
$curso = 'Variable cambiante';
echo $curso."<br/>";
$curso = 'Variable cambiante 2';
echo $curso."<br/>";

define('constantes', 'Esta es una variable constantes');
echo constantes;
/*otra forma de poner una constante es la siguiente */

const nuev= "otra var consante";

echo nuev;

/*la diferencia de las dos maneras es que el const la define en el tiempo de compilacion+
y define la define en el tiempo de ejecucion */
?>