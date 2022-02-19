<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>    
</head>
<body>
    <?php

    function multiplica_vetor($vetor1, $vetor2){
        echo "<table>";
        foreach ($vetor1 as $key => $v1) {
            echo "<tr>";
            foreach ($vetor2 as $key => $v2) {
                echo "<td> " . $v1 * $v2 . " </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $vetor1 = [1, 3, 5];
    $vetor2 = [1, 3, 5];    

    multiplica_vetor($vetor1, $vetor2);    
    ?>
</body>
</html>