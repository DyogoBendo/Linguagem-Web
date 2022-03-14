<?php
    include ('connection.php');    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $id = $_GET["id"];            
    $conn = OpenCon();    
        
    $sql = "DELETE FROM contato WHERE {$id} = id";            
    if ($conn->query($sql) === TRUE) {        
        header("Location:lista_cadastros.php");    
        exit();          
    } 
    CloseCon($conn);
    
?>