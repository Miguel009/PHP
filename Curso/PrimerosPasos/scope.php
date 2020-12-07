<?php
//Variables scope
function estudiante(){
    $edad = 23;
    echo $edad;
}

estudiante();
/*Aqui esto nos daria error ya que como la variable edad este dentro de un funcion y no de
manera global entonces php no reconoce a la variable para poder usarse fuera de la funcion.*/
//echo $edad;

function estudiante2($edad){
    echo $edad;
}
 estudiante2(25);

/*Si se necesita incluir valores externos es necesario usar la palabra global para que agarre esa variable */
$edad = 22;
 function estudiante3(){
     global $edad;
     $edad =  24;
    echo $edad;
}
 estudiante3();
 echo $edad;
 /*si se quieren tener ambos valores se debe hacer lo siguiente: se debe quitar la variable global */
 $edad = 22;
 function estudiante4(){
     $edad =  24;
    echo $edad;
}
 estudiante4();
 echo $edad;
?>