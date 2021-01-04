<?php
/*la diferencia de include y require es que si el include falla 
solo manda un mensaje diciendo que no encontro el archivo pero 
si usamos require entonces enviaria un error fatal */
/* 
ESO SE PUEDE VER AQUI
require 'footer.php';
include 'footer.php';*/
include 'includes/heads.php';
include 'includes/nav.php';
?>
<h1><?php pruebas() ?></h1>
<?php
include 'includes/footer.php';
?>

