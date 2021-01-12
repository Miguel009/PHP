<?php
/*AQUI LO QUE HICIMOS FFUE CREAR UN ARCHIVO EL CUAL LO LLAMAMOS FILE.TXT Y
LO ABRIMOS COMO WRITEONLY */
//$myfile = fopen("uploads/file.txt", 'w');

/*$text = "Este es un archivo creado con php";
fwrite($myfile, $text);
fclose($myfile);
echo $myfile;
*/
/*AQUI LO QUE HACEMNS ES ABRIR EL ARCHIVO PARA VER EL CONTENIDO Y LUEGO CREAMOS UN ARREGLO
CON EL STRING QUE SE NOS ENVIA */
$filepath = "uploads/file.txt";
$output = file_get_contents($filepath);
$ages = explode("\n", $output);
foreach($ages as $age)
{
    echo $age."<br>";
}
?>