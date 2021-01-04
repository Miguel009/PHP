<?php
$esp = "<br>";
//funcion de php

//funciones string
    //string length
    $string = "Probando funciones";
    echo strlen($string)."".$esp;
    //string word count
    $nombre = "Mi querido nombre es miguel";
    echo str_word_count($nombre) ."".$esp;
    //Encontrar texto en un string
    $email = "info@email.com";
    if(strpos($email, "@"))
    {
        echo "Validado bicho";
    }
    else
    {
        echo "email no valido";
    }
    echo $esp;
    //Primera letra de las palabras se transforman a mayusculas
    echo ucwords("Oracion con palabras en primera letra mayuscula") ."".$esp;
    //tranformar la oracion en mayusculas
    echo strtoupper("Oracion que hace la oracion en mayusculas") ."".$esp;
    //tranformar la oracion en minusculas
    echo strtolower("Oracion Que HACE la oracion en minusculas") ."".$esp;
//funciones matematicas
    //ceil
    echo ceil(0.50)."".$esp;
    //floor
    echo floor(0.45)."".$esp;
    //round: permite redondear un numero a la cant de decimales que se desee en este caso 2
    echo round(0.543354, 2)."".$esp;
    //Exponencial
    echo exp(4)."".$esp;
//funciones de fecha
    /*
        'd' = Day
        'j' = Dia sin ceros
        'D' = Dia de la semana
        'l' = dia completo de la semana
        'm' = mes como numero con ceros
        'n' = mes como numero sin ceros
        'M' = Mes con 3 letras
        'F' = mes completo
        'y' = años de dos digitos
        'Y' = año completo
    */
    echo date('Y/m/d'), $esp;

    /*
    Tiempos
        'g' = Horas en formato de 12 sin ceros
        'h' = Hotas en formato de 12 con ceros
        'G' = Horas en formato 24 sin ceros
        'H' = horas en formato 24 con ceros
        'a' = am/pm en minusculas
        'A' = AM/PM en mayusculas
        'i' = minutos sin ceros
        's' = segundos sin ceros        
    */
    date_default_timezone_set('America/El_Salvador');
    echo date('H:i:s a'), $esp;

    //String a tiempo
    $time = strtotime("4:00pm December 03 2020");

    echo $time, $esp; /*este es el tiempo en segundos calculado desde el año
    1970 */

    echo date('Y/m/d H:i:s a', $time), $esp;/*aqui ya convertimos el dato */

//funciones de arreglos

    $PersonalInfo = array("Name"=>"Dary", "Age"=>21, "City"=>"Algun lado");
    $masinfo = array("State"=>"MAF", "Weight"=>184);
    /*aqui con el array merge lo que hacemos es que al array que se ponga de primero
    en este caso personal se le agregen los otros dos datos de mas info */
    $PersonalInfo = array_merge($PersonalInfo, $masinfo);

    foreach($PersonalInfo as $key=>$valor){
        echo "$key : $valor <br>";
    }
    /*obtener la llaves */
    print_r(array_keys($PersonalInfo));
    echo $esp;
    /*obtener solo los valores */
    print_r(array_values($PersonalInfo));

    $carro = ["volkswagen", "audi", "Mercedes"];
    echo $esp;
    array_push($carro, "nuevo");
    print_r($carro);
    echo $esp;
    /*buscar en el array */
    echo array_search("audi", $carro);
    echo $esp;
    /*Count */

    echo count($carro), $esp;
//funciones de numeros random

    //Rand
    echo rand(), $esp; //sin parametros esta devolvera un numero bastante grande y esto es debido a que el max number es bastante grande
    //como se puede ver con la siguiente funcion
    echo getrandmax(), $esp;

    //Rand con parametros
    echo rand(1, 10)

?>