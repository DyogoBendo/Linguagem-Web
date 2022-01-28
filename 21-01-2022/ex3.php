<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="ex3.php" method="post">
        <input type="number" name="number1">
        <select name="sign" id="sign">
            <option value="x">x</option>
            <option value="/">/</option>
            <option value="+">+</option>
            <option value="-">-</option>
        </select>        
        <input type="number" name="number2">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>    
    <br>
    <?php
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $sign = $_POST["sign"];

        switch($sign){
            case "+":
                echo "O resultado da soma é: " .$number1 + $number2;
            break;
            case "-":
                echo "O resultado da subtração é: " . $number1 - $number2;
            break;
            case "/":
                echo "O resultado da divisão é: " . $number1 / $number2;
            break;
            case "x":
                echo "O resultado da multiplicação é: " . $number1 * $number2;
            break;
        }
    ?>
</body>
</html>