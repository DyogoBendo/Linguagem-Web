<?php
    include '../connection.php';
    session_start();    
    $username = $_POST["username"];    
    $password = $_POST["password"]; 
    
    $conn = OpenCon();
    
    $sql = "SELECT username, password FROM user WHERE username='" . $username . "'";
    $result = $conn->query($sql);    
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();            
        if ($row["password"] == $password){    
            $_SESSION['logado'] = True;        
            $_SESSION["username"] = $username;
            header("Location:../index.php");    
            exit();
        } else{
            $_SESSION['message'] = 'Senha incorreta!';
            header("Location:../views/login_view.php");    
            exit();
        }        
    }else {
        $_SESSION['message'] = 'Usuário não existe, cadastre-se!';        
        header("Location:../views/register_view.php");    
        exit();
    } 
    CloseConn($conn);

    
?>