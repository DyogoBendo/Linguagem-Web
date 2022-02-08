<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">    
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <title>Informações salvas</title>
    <style>
        .container{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php        
        session_start();                
        $username = $_SESSION["username"];
        $nome = $_POST["nome"];    
        $sobrenome = $_POST["sobrenome"]; 
        $rg = $_POST["rg"]; 
        $cpf = $_POST["cpf"]; 
        $telefone = $_POST["telefone"]; 
        $estado = $_POST["estado"]; 
        $cidade = $_POST["cidade"]; 
        $rua = $_POST["rua"];         
        $hobbies = $_POST["hobby"]; 
        $carros = $_POST["carro"]; 
        $esporte = $_POST["esporte"];         

        echo "<h1 class='title'> Olá, " . $nome . " " . $sobrenome . "</h1>";
        echo "<h2 class='subtitle'> Cuidado com seu CPF (" . $cpf . ") e RG (" . $rg .")";
        echo "<h2 class='subtitle'> E olha que eu ligo pra você eim! " . $telefone . "</h2>";
        echo "<h2 class='subtitle'> Seu endereço completo é: " . $estado . " - " . $cidade . " - ". $rua . "</h2>";
        
        echo "<h1 class='title'> Seus hobbies são: </h1>";        
        if(isset($hobbies)) {   
            echo "<div class='content'><ul>";
            foreach($hobbies as $hobby) {
                echo "<li>" . $hobby . "</li>";
            }
            echo "</ul> </div>";
        } else{
            echo "Nenhum :(";
        }

        echo "<h1 class='title'> Seus carros favoritos são: </h1>";

        if(isset($carros)) {   
            echo "<div class='content'><ul>";
            foreach($carros as $carro) {
                echo "<li>" . $carro . "</li>";
            }
            echo "</ul> </div>";
        } else{
            echo "Nenhum :(";
        }

        echo "<h2 class='subtitle'> E com certeza você ama praticar: " . $esporte . "</h2>";

    ?>
    </div>
        
        
</body>
</html>