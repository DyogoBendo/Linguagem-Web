<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="atv2.php" method="post">
        <label for="numero">Número a calcular: </label>
        <input type="text" name="numero">

        <input type="submit" value="Enviar">        
    </form>
    <?php        
        $numero = $_POST["numero"];
        if($numero){
            for ($i=1; $i < 11; $i++) { 
                echo $i . " x " . $numero . " = " . $numero * $i .  "<br>";
            }
        }
    ?>
</body>
</html>

