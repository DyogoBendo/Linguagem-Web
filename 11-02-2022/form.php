<?php
    session_start();

    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];        
        session_destroy();
    } else{
        header("Location:index.php");    
        exit();
    }    


?>

<p>Aproveita e dá F5 pra responder de novo o formulário :)</p>
