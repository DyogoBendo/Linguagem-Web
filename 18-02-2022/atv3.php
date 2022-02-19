<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atv3.php" method="post">
        <label for="nota1">Primeira nota: </label>
        <input type="text" name="nota1">

        <label for="nota2">Segunda nota: </label>
        <input type="text" name="nota2">
        <input type="submit" value="Enviar">
    </form>    
    <?php
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        if($nota1){
            echo "Média: " . ($nota1 + $nota2) / 2;
        }

    ?>
</body>
</html>
