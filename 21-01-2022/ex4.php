<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        table,  td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            padding: 5px 10px;                
        }
    </style>
</head>
<body>
    <table>
        <h1>Tabuada!</h1>
        <?php  
            echo "<tr>";
            for ($i=1; $i < 11; $i++) { 
                echo "<th>" . $i . "</th>";
            }            
            echo "</tr>";
            for($i = 1; $i <= 10; $i ++){            
                echo "<tr>";
                for ($j=1; $j <= 10; $j++) { 
                    echo "<td>" . $j . " x " . $i . " = " . $i * $j . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>