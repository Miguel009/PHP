<?php
/*1. arreglo en orden desendente */

$numeros = array("Milk" =>2, "Cheese" =>3, "7-up" =>5);

arsort($numeros);

print_r($numeros);


/*2. Contar el dia de cumpleaños y el dia de ahora */
$dias = mktime(0, 0, 0, 5, 3, 2021);

$ahora = time();

$diferencia = $dias - $ahora;
$days =  (int) ($diferencia/86400);/*esto es para tranformal los segundos en dias es decir las 24 horas */

echo "<br>Dias para el siguiente cumpleaños $days";

/*3. generar numeros flotantes */

$random = "<br>".rand(0, 100)/10;

echo $random;

/*4. convertir el string a lowecase */

$string  = "<br>Gusto verlo .señor .tengo que hacer. estos .ejercicios para que se vea Bonito";

function lowercase($strs){
    echo strtolower($strs);
}

lowercase($string);

/*5. Mirar dentro de un text */
$puntuacion = 0;

function BuscarText($stringh, $puntu){
    for($i=0; $i<strlen($stringh);$i++){
        if($stringh[$i]=="."){
            $puntu++;
        }
    }

    echo "<br>El texto tiene $puntu puntuaciones";
}

BuscarText($string, $puntuacion);

/*6 maximo y minimo */

$SoloNum =  array(8, 15 ,541 ,45 , 5 ,55, 45 , 174, 1, 2 ,4565);

echo "<br>".min($SoloNum), "<br>";
echo max($SoloNum);

/*7. Repetir string */

$st = "Nuevo esckties";
echo str_repeat($st, 8);
?>