<div class="login">
	<form method="POST" action="app.php">
	<div class="login-context">
        <div class="login-title">Newtasks</div>
        <div class="login-description">Access your account now</div>
        <div class="login-label">Login</div>
        <input type="text" name="login" class="login-input" 
        autocomplete="off" placeholder="Digite seu login">
        <div class="login-label">Password</div>
        <input type="password" name="password" class="login-input" 
        autocomplete="off" placeholder="Digite sua senhaa">
        <button class="loginbutton">Access</button>
        <input type="hidden" name="loginoperation" value="validarlogin">
        <?php 
                
           if(isset($_SESSION['login_mensagem'])){                     
               echo "<div style=' border-radius:3px; margin-top:10px; padding: 3px 10px; background:#e60000; color:#fff;'>".
               $_SESSION['login_mensagem'].
               "</div>";
               unset($_SESSION['login_mensagem']);
           }

        ?>
  </form>
</div>