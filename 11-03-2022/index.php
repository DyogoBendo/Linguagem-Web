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
        <form action="cadastrar_controller.php" method="post">
            <div class="mb-3">
                <label for="cpf" class="form-label">Nome: </label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone: </label>
                <input type="text" name="telefone" placeholder="9-9999-9999" id="telefone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF: </label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00">
            </div>

            <div class="mb-3">
                <label for="dataNascimento" class="form-label">Data de Nascimento: </label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>