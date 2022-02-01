<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">    
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <title>Login</title>
</head>
<body>  
  <?php    
    session_start();
    $_SESSION['logado'] = False;

    if(isset($_SESSION['message'])){
      if ($_SESSION["message"] == "Usuário cadastrado com sucesso!"){
        include_once '../messages/sucess.php';
      } else{
        include_once '../messages/error.php';
      }
    }
  ?>
    
    <main>
      <div class="container">        
        <form action="../controllers/login_controller.php" method="post">                  
              <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="username" type="text" placeholder="Username">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>
              
              <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="password" type="password" placeholder="Password">
                  <span class="icon is-small is-left">
                    <i class="fas fa-key"></i>
                  </span>              
                </div>            
              </div>                    
              
              <div class="field">
                <div class="control">
                  <input type="submit" class="button is-link" value="Entrar">
                </div>            
              </div>
        </form>
        <p><a href="./register_view.php">Não possui uma conta? Cadastre-se</a></p>
      </div>

  </main>
</body>
</html> 