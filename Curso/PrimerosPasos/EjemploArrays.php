<?php

$cursos = array('Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco');
/*aqui como se puede ver aunque ponga que el valor esta en la posicion 15 que tecnicamente seria la 16 aun asi la acepta y la coloca al arreglo*/
$cursos[5]="Nuevo valor";
echo $cursos[3]."<br/>";
print_r($cursos);
echo "<br/>";
echo "la cantidad de datos en el arreglo es ". count($cursos);
/*Otra forma de hacer un array */

$semana[0] = 'lunes';
$semana[1] = 'martes';
$semana[2] = 'miercoles';
$semana[3] = 'jueves';
$semana[4] = 'viernes';
$semana[5] = 'sabado';
$semana[6] = 'domigno';
echo "<br/>";
echo "la cantidad de datos en el arreglo 2 es ". count($semana);
echo "<br/>";
for ($i=0; $i < count($semana); $i++) { 
    if ($semana[$i]=="jueves") {
        echo "Ah es el jueves";
    }

    echo $semana[$i]. "<br>";
}

/*Ejercicio*/

$amigos = array("mario", "douglas", "sketit", "crypt", "asad", "asuma", "con todo el bicho", "ahu");
$posicion = count($amigos)-2;
asort($amigos); /*se ordenan de manera alfabetica de A a Z*/
rsort($amigos); /*se ordenan de manera alfabetica pero al contrario de asort*/
arsort($amigos); /*hace que se ordenen de manera alfabetica de Z a A pero mantiene la posicion por defecto de los archivos*/
print_r($amigos);
echo $amigos[$posicion];

//Funciones rapidas con ARRAY
?>