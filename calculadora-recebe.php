<?php 
$resultado = "";

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['operacao']== 'soma'){
        $resultado = $_POST['numero'] + $_POST['numero2'];
    }

else if($_POST['operacao'] == 'subtracao'){
    $resultado = $_POST['numero'] - $_POST['numero2'];
}

else if($_POST['operacao'] == 'multiplicar'){
    $resultado = $_POST['numero'] * $_POST['numero2'];
}

else if($_POST['operacao'] == 'divisao'){
    $resultado = $_POST['numero'] / $_POST['numero2'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> o Resultado da Operação é <?php echo $resultado ?></h1>
</body>
</html>