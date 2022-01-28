<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparando Números</title>
</head>
<body>
    <form action="ex5.php" method="post">
        <input type="number" name="number1">            
        <input type="number" name="number2">
        <br>
        <br>
        <input type="submit" value="Comparar">
    </form>    
    <br>
    <br>

    <?php
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        echo $number1 . " x " . $number2 . "<br>";

        if($number1 != ""){
            if($number1 == $number2){
                echo "Números iguais!";
            } elseif($number1 > $number2){
                echo "Primeiro é maior";
            } else{
                echo "Segundo maior";
            }
        }
    ?>
</body>
</html>