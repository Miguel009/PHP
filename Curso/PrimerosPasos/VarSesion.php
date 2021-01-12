<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*con esto lo que hacemos es crear nuestra primera sesion */
        session_start();

        //store information
    $_SESSION['Nombre']="Miguel";
    $_SESSION['age'] = 19;
    echo "hola, ", $_SESSION['Nombre'];
    /*Aqui destruimos la sesion aunque tecnicamente la sesion sera terminada cuando 
    el navegador se cierre*/
    session_destroy();
    ?>
</body>
</html>