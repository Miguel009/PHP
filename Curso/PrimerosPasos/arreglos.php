<?php
//Arreglos, vectores, arrays

$arreglos = array('Lunes', 'Martes', 'Miercoles', 'Jueves');
var_dump($arreglos);/*Identifica el tipo de dato que tiene y la cantidad de caracteres este se puede utilizar tanto con arreglos como con variables 
normales */
echo "<br/>";
$numero =100;
var_dump($numero);
echo "<br/>";
$nombre = "Miguel";
var_dump($nombre);
echo "<br/>";
$arreglos2 = array('Lunes', 'Martes', 'Miercoles', 'Jueves');
print_r($arreglos2);/*vamos a tener el valor del array y la posicion */
/*Array con carcater asociativo */
echo "<br/>";
$estudiante = array('nombres'=>'Mi Nombres', 'apellido'=>'Magikarp');
print_r($estudiante);
echo "<br/>";
echo $estudiante['nombres'];
?>