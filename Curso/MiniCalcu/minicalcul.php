<?php
$suma = 0;
if (isset($_GET['numero1']) &&isset($_GET['numero2'])&&is_numeric($_GET['numero1'])&&is_numeric($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $suma = $numero1+$numero2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form class="formu" action="minicalcul.php" method="get">
        <h1>Calculadora PHP</h1>
        <input type="text" name="numero1" value ="<?php echo $numero1?>" autocomplete="off" placeholder="Ingrese numero 1">
        <input type="text" name="numero2" value = "" autocomplete="off" placeholder="Ingrese numero 2">
        <button class="btn">Calcular</button>
        <div class="Respuesta">
            <?php echo 'El Resultado es: '.$suma ?>
        </div>
    </form>
</body>
</html>