<?php
//Funciones rapidas con array
$amigos = array("mario", "douglas", "sketit", "crypt", "asad", "asuma", "con todo el bicho", "ahu");

//funcion que nos permite buscar

$bucar = array_search('crypt', $amigos);
echo "<br>";
print_r($bucar);

//Invertir el array
$bucar = array_reverse($amigos);
echo "<br>";
print_r($bucar);
//Peremite hacer grupos del arreglo en este caso se dividira en 2
$funcion = array_chunk($amigos, 2);
echo "<br>";
print_r($funcion);

//ahora usaremos slice que nos permite eliminar elementos del arreglo o mejor dicho iniciar desde el siguiente al que hemos colocado
//en este caso al poner el cuatro significa que ira  a la posicion 4 de nuestro array y empezara a mostrar despues de este
$funcion2 = array_slice($amigos, 4);
echo "<br>";
print_r($funcion2);

//ahora el merge es usado para unir 2 o mas arrays
$familia = array("43", "dafa", "sketaddfsit", "crfsdfdsypt");

$funcion3 = array_merge($amigos, $familia);
echo "<br>";
print_r($funcion3);

//Ahora con array pop lo que nos permite es que de un arreglo se visualize el ultimo dato que este tenga
$funcion4 = array_pop($amigos);
echo "<br>";
print_r($funcion4);
//si lo dejamos unicamente como un llamado de array entonces pasa lo siguiente y es que se quita el ultimo elemento del array pero muestra los demas
array_pop($amigos);
echo "<br>";
print_r($amigos);
?>