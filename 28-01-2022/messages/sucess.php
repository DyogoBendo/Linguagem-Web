<article class="message is-success">
    <div class="message-header">
      <p>Sucesso</p>      
    </div>
    <div class="message-body">
      <?php
        session_start();        
        echo $_SESSION['message'];  
        unset($_SESSION['message']);              
      ?>
    </div>
</article>