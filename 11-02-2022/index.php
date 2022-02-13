<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Fortmulário</title>    
</head>
<body>

<?php            
    if (isset($_POST["time"])){
        session_start();
        $message = "<h1> Olá torcedor do " . $_POST["time"] . "! </h1>";
        $message .= "<h2> Concordo que o " . $_POST["jogador"] . " joga muito! </h2>";        
        $message .= "<h3> Imagina ele jogando no " . $_POST["estadio"] . "! </h3>";

        
        echo $_POST["copa"];
        if (!$_POST["copa"]){
            $message .= "<h1> Esse ano você vai ver o Brasil ser campeão! </h1>";
        } else{
            $message .= "<h2> Tomara que você veja o Brasil ganhar de novo esse ano! </h2>";
        }
        $_SESSION["message"] = $message;
        header("Location:form.php");    
        exit();
    }
?>

    <h1>Pesquisa futebolística!</h1>

    <form action="index.php" method="post">
        <div class="field">
            <label for="time">Qual seu time de futebol favorito?</label>
            <input type="text" name="time" id="time">
        </div>
        <div class="field">
            <label for="jogador">Qual é seu jogador favorito?</label>
            <input type="text" name="jogador" id="jogador">
        </div>        
        <div class="field">
            <label for="estadio">Qual estádio você acha o mais bonito?</label>
            <input type="text" name="estadio" id="estadio">
        </div>
        <div class="field">
            <label for="copa">Viu o Brasil ser campeão de uma copa do mundo?</label>
            <input type="checkbox" name="copa" id="copa">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>