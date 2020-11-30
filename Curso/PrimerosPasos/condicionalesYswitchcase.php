<?php
//Condicionales

$numero = 4;
$numero2=43;
if ($numero<$numero2) {
    echo "El numero $numero es menor a $numero2";
}
else if ($numero>$numero2) {//el elseif se puede escribir asi o como else if 
    echo "El numero $numero es mayor a $numero2";
}
else
{
    echo "Nada";
}
echo "<br/>";
//Switch
$variable = 'd';
switch ($variable) {
    case 'a':
        echo "La variable tiene el valor $variable que bien";
        break;
    case 'b':
        echo "La variable tiene el valor $variable que bien2";
        break;
    case 'c':
        echo "La variable tiene el valor $variable que bien3";
        break;
    default:
        echo "La variable tiene el valor $variable";
        break;
}

/**/

?>