<article class="message is-danger">
    <div class="message-header">
      <p>Erro</p>      
    </div>
    <div class="message-body">
      <?php
        session_start();        
        echo $_SESSION['message'];  
        unset($_SESSION['message']);              
      ?>
    </div>
</article>