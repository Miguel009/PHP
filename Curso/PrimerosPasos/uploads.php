<?php
/*aqui l oque estamos haciendo es especificar que ah habido un post o un submit mejor dicho
para realizar las acciones */
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    /*basicamente es como un split de javascript */
    $tempextension = explode('.', $name);
    /*aqui lo que hacemos es convertirlo todo en minusculas y agarramos unicamente
    el ultimo indice del arreglo por eso la funcion end() */
    $fileExtension = strtolower(end($tempextension));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileExtension, $allowed)){
        if($error === 0){   
            /*el archivo debe ser menor a 2MB */
            if($size<30000)
            {
                /*aqui creamos un id unico para evitar que las imagenes se sobreescriban */
                $newfilename = uniqid('', true). ".". $fileExtension;
                $filesDestini = "uploads/".$newfilename;
                /*aqui lo que hacemos es colocar o ya mover la imagen */
                move_uploaded_file($tmp_name, $filesDestini);
                /*aqui no redirigimos a la misma pagina en donde enviamos el archivo */
                header("Location: cookiesandFiles.php");
            }
            else
            {
                echo "Lo sentimos el archivo es muy grande";
            }
        }
        else
        {
            echo "perdon, hay un error";
        }
    }
    else
    {
        echo "El tipo de archivo no es correcto";
    }

}

?>