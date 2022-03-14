<?php
    include ('connection.php');    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $id = $_GET["id"];            
    $conn = OpenCon();    
        
    $sql = "SELECT * FROM contato WHERE {$id} = id";            
    $result = $conn->query($sql); 
    while ($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
        $email = $row["email"];
        $telefone = $row["telefone"];
        $cpf = $row["cpf"];
        $dataNascimento = $row["dataNascimento"];
    }
    if ($conn->query($sql) === TRUE) {        
        header("Location:lista_cadastros.php");    
        exit();          
    } 
    CloseCon($conn);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <div class="container">
        <form action="editar_controller.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="cpf" class="form-label">Nome: </label>
                <input value="<?php echo $nome; ?>" type="text" name="nome" id="nome" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input value="<?php echo $email; ?>" type="email" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone: </label>
                <input type="text" value="<?php echo $telefone; ?>" name="telefone" placeholder="9-9999-9999" id="telefone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF: </label>
                <input type="text" value="<?php echo $cpf; ?>" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00">
            </div>

            <div class="mb-3">
                <label for="dataNascimento" class="form-label">Data de Nascimento: </label>
                <input type="date" value="<?php echo $dataNascimento; ?>" name="dataNascimento" id="dataNascimento" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

