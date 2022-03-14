<?php
    include '../connection.php';
    session_start();
     $username = $_POST["username"];     
     $password = $_POST["password"]; 
     
     echo "banana";
     $conn = OpenCon();
     
     $sql = "SELECT username, password FROM user WHERE username='" . $username . "'";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
        $_SESSION['message'] = 'Usuário já existente!';        
        header("Location:../views/register_view.php");    
     }else {
        $sql = "INSERT INTO user (username, password)
        VALUES ('". $username ."', '" . $password . "')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['message'] = 'Usuário cadastrado com sucesso!';        
            header("Location:../views/login_view.php");    
            exit();          
        } else {
            $_SESSION['message'] = 'Erro, tente novamente';        
            header("Location:../views/register_view.php");    
            exit();          
        }         
     }
     CloseCon($conn);
  ?>