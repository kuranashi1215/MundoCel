<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="view/css/loginstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Usuario" name="txtUser">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Contraseña" name="pass">
				</div>
				<button class="button login__submit" value="Log in">
					<span class="button__text">Iniciar Sesion</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
				<br>								
				<center><a href="register">No tienes cuenta?, Registrate!</a></center>
			</form>
			<?php
                if (isset($_POST['txtUser'])){

                    $user = $_POST['txtUser'];
                    $pass = $_POST['pass'];

                    try {
                        $objCtl = new UserController();
                        $objCtl -> getVerifyPass($user,$pass);
                    } catch (Exception $e) {                        

                    }

                }
            ?>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
