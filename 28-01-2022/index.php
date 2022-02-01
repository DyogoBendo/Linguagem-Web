<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">    
    <title>Entrou!!</title>    

    <style>
        html{
            background-image: url("https://gifs.eco.br/wp-content/uploads/2021/09/gifs-do-neymar-dancando-2.gif");
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <?php
        session_start();    
        if($_SESSION['logado'] !== True){
            header("Location:views/login_view.php");    
            exit();
        }

    ?>    
    <button class="button"> <a href="views/login_view.php">Sair</a> </button>
</body>
</html>