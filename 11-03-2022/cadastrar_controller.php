<?php
    include ('connection.php');    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $nome = $_POST["nome"];    
    $email = $_POST["email"]; 
    $telefone = $_POST["telefone"]; 
    $dataNascimento = $_POST["dataNascimento"]; 

    $cpf = $_POST["cpf"]; 
    echo "data de nascimento " . $dataNascimento;
    $conn = OpenCon();    
        
    $sql = "INSERT INTO contato (nome, email, telefone, cpf, dataNascimento)
        VALUES ('{$nome}', '{$email}', '{$telefone}', '{$cpf}', '{$dataNascimento}')";            
    if ($conn->query($sql) === TRUE) {        
        header("Location:lista_cadastros.php");    
        exit();          
    } 
    CloseCon($conn);
    
?>