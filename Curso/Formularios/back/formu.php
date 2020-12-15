<?php
/*colocamos las variables que vienen del post */
$nombre = $_POST["nombre"];
$contra = $_POST["contra"];
$genero = $_POST["genero"];
$corre = $_POST["email"];
$materia =$_POST["materia"];
$telefono = $_POST["telefono"];
//empty y isset es practicamente lo mismo la diferencia es que isset genera un aviso
if(!empty($nombre) && !empty($contra) && !empty($genero) && !empty($materia) && !empty($telefono)){
    /*colocamos variables para poder utilizar nuestra base de datos con sql */
    $host = "localhost";
    $user = "root";
    $db = "usuario";
    /*aqui hacemos la conexion colocando el host usuario constraseña y base de datos */
    $conexion = new mysqli($host, $user, "", $db);
    /*si da algun error entonces iria aqui */
    if(mysqli_connect_error())
    {
        /*die es una manera de exit para terminar el proyecto */
        die('connect error('.mysqli_connect_errno().') mysqli_connect_error()');
    }
    else
    {
        /*colocamos dos variables una del telefono y una del insert, la del telefono es para saber que el 
        numero de telefono no se repita */
            $select = "SELECT telefono from user where telefono = ? limit 1";
            $inser = "INSERT INTO user (nombre, contra, genero, email, materia, telefono) values (?, ?, ?, ?, ?, ?)";
            /*aqui peraparamos la conexion con el query */
            $stmt = $conexion->prepare($select);
            /*le mandamos el parametro que vamos a utilizar con la i diciendo que es va a ser un integer y luego la variable */
            $stmt->bind_param("i", $telefono);
            /*aqui se ejecuta */
            $stmt->execute();
            /*es utilizada para ver los resultados aqui vinculamos el resultado a al resulado que salga*/
            $stmt->bind_result($telefono);
            /*aqui se coloca el conjunto de resultados de la ultima consulta */
            $stmt->store_result();
            /*aqui vemos la cantidad de row que tiro la ultima consulta */
            $rnum = $stmt->num_rows;
            /*verificamos que la consulta de select de 0 es decir que no exista */
            if($rnum==0)
            {
                $stmt ->close();
                /*aqui realizamos lo mismo solo que ahora   con el insert y colocamos los datos que seria 5 strings es decir 5 s y luego un integer que seria el telefono
                 */
                $stmt = $conexion->prepare($inser);
                $stmt->bind_param("sssssi", $nombre, $contra, $genero, $corre, $materia, $telefono);
                $stmt->execute();
                echo "Registro completo";
            }
            else
            {
                echo "Registro incompleto ya esta ese numero";
            }
            /*cerramos conexion y consulta */
            $stmt->close();
            $conexion->close();

    }

}
else
{
    echo "todos los datos son obligatorios my bro";
    die(); //equivalente a un exit
}