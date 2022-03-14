<?php
    include ('connection.php');    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $id = $_POST["id"];    
    $nome = $_POST["nome"];    
    $email = $_POST["email"]; 
    $telefone = $_POST["telefone"]; 
    $dataNascimento = $_POST["dataNascimento"]; 
    $cpf = $_POST["cpf"];     

    $conn = OpenCon();    
        
    $sql = "UPDATE contato 
    SET nome = '{$nome}', email = '{$email}', telefone = '{$telefone}', dataNascimento = '{$dataNascimento}', cpf = '{$cpf}'
    WHERE id = {$id}";
    $result = $conn->query($sql);           
    header("Location:lista_cadastros.php");          
    CloseCon($conn);
    
?>