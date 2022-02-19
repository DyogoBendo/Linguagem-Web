<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atv1.php" method="post">
        <label for="altura">Altura</label>
        <input type="text" name="altura">

        <label for="peso">Peso</label>
        <input type="text" name="peso">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>

<?php
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $imc= $peso / ($altura * $altura);
    if ($altura){
        echo "IMC: " .  $imc . "<br>";
    
        if($imc < 18.5){
            echo "Abaixo do peso";
        } elseif ($imc < 25){
            echo "Peso normal";
        } elseif ($imc < 30){
            echo "Sobrepeso";
        } elseif($imc < 35){
            echo "Obesidade Grau I";
        } elseif($imc <40){
            echo "Obesidade Grau II";        
        } else{
            echo "Obesidade Grau III";
        }
    }

