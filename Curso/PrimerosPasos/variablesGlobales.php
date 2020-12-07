<?php
$n1= 6;
$n2 = 4;
/*GLOBLAS funciona para hacer que una variable se convierta en una variable global */
function sumar(){
    $GLOBALS['s'] = $GLOBALS['n1']+$GLOBALS['n2'];
}

sumar();
echo $s;
/*SERVER trae informacion del servidor y posee bastantes funciones o llamadas a variables diferentes */
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_REFERER'];
?>