<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista cadastro</title>
    <style>
        .container{
            margin-top: 30px;
            display: grid;
            grid-template-columns: auto auto auto;
            row-gap: 30px;
        }
    </style>
</head>

<body>
    <?php
        include_once('header.php');
        include ('connection.php');   

        $conn = OpenCon();
    
        $sql = "SELECT * FROM contato";
        $result = $conn->query($sql); 
                  
        echo "<div class='container'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>{$row["nome"]}</h5>
              <h6 class='card-subtitle mb-2 text-muted'>{$row["email"]}</h6>
              <p class='card-text'>Telefone: {$row["telefone"]}</p>
              <p class='card-text'>CPF: {$row["cpf"]}</p>
              <p class='card-text'>Data de nascimento: {$row["dataNascimento"]}</p>
              <a href='deletar.php?id={$row["id"]}' class='card-link'>Deletar</a>
              <a href='editar_form.php?id={$row["id"]}' class='card-link'>Editar</a>
            </div> </div>";            
        }
        echo "</div>";
        
        $result->close();
        CloseCon($conn);
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>