<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Paridade</title>
</head>
<body>
    <section class="section">
        <div class="container">
            <form action="ex1.php" method="post">
                <div class="field">
                    <label for="number" class="label"> Insira um número: </label>
                    <div class="control">
                        <input class="input" type="number" name="number" id="number" >
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="button" type="submit" value="Enviar">
                    </div>
                </div>
            </form>
            <br>
            <div class="block content">
                <?php    
                    $numero = $_POST['number'];
                    if($numero){        
                        if ($numero % 2 == 0){
                            echo "<p> O número " . $_POST['number'] . " é <strong> par! </strong> </p>";
                        } else{
                            echo "<p> O número " . $_POST['number'] . " é <strong> ímpar! </strong> </p>";
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>



