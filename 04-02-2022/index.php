<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">    
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Entrou!!</title>        
</head>
<?php
    session_start();    
    if($_SESSION['logado'] !== True){
        header("Location:views/login_view.php");    
        exit();
    }
    include './connection.php';
    $conn = OpenCon();          
?>    
<body>
    <button class="button"> <a href="views/login_view.php">Sair</a> </button>
    <main>
      <div class="container">        
        <form action="views/user_info_view.php" method="post">                              
              <div class="field">
                <label class="label">Nome: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="nome" type="text" placeholder="Nome">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>
              
              <div class="field">
                <label class="label">Sobrenome: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="sobrenome" type="text" placeholder="Sobrenome">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">RG: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="rg" type="text" placeholder="RG - Apenas números">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">CPF: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="cpf" type="text" placeholder="CPF - Apenas números">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">Telefone: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="telefone" type="text" placeholder="Apenas números">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">Estado: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="estado" type="text" placeholder="Estado - Nome completo">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">Cidade: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="cidade" type="text" placeholder="Cidade">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
              <div class="field">
                <label class="label">Rua: </label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" name="rua" type="text" placeholder="Rua">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>              
                </div>            
              </div>    
            
            <h1 class="title">Hobbies</h1>
            <?php                                              
                $sql = "SELECT * FROM hobby";                
                $result = $conn->query($sql);                      
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<div class='field'> <label class='checkbox'> <input type='checkbox' name='hobby[]' value='" . $row["nome"] . "'>
                            ". $row["nome"] . "
                        </label>
                      </div>";                        
                    }           
                }               

            ?>     
            <h1 class="title">Carros</h1>
            <?php                                              
                $sql = "SELECT * FROM carro";                
                $result = $conn->query($sql);                      
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<div class='field'> <label class='checkbox'> <input type='checkbox' name='carro[]' value='" . $row["marca"] . " - " . $row["modelo"] . "'>
                            ". $row["marca"] . " - " . $row["modelo"] . "
                        </label>
                      </div>";                        
                    }           
                }               

            ?>     
            <div class="field">
              <div class="select">
                <select name="esporte">
                  <?php
                    $sql = "SELECT * FROM esporte";                
                    $result = $conn->query($sql);                      
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){                            
                            echo '<option value="' . $row["modalidade"] . '"> ' . $row["modalidade"] . '</option>';                            
                        }           
                    }               
                  ?>
                </select>
              </div>                               
            </div>     
            <div class="field">
              <div class="control">
                <input type="submit" class="button is-link" value="Salvar dados">
              </div>            
            </div>
        </form>
      </div>
  </main> 
</body>
</html>