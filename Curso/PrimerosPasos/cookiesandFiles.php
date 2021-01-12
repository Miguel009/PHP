<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*aqui utilizamos esto  para generar una cookie */
/*setcookie("name", "Dary", time()+86400*30);

print_r($_COOKIE)*/
/*aqui lo que estamos haciendo es mostrar el nombre del archivo y lo que 
estamos haciendo con el [file][name] es decir que busque en file y luego que en este
busque el nombre ya que nuestro input es de tipo file y se tiene
que buscar el name de ese file */


////echo $name = $_FILES['file']['name'], "<br>";
////echo $type = $_FILES['file']['type'], "<br>";


/*aqui muestra que esta en una locacion temporal el archivo */


///echo $tmp_location = $_FILES['file']['tmp_name'];
?>

<form action="uploads.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">

    <button type="submit" name="submit">Submit</button>

</form>
</body>
</html>