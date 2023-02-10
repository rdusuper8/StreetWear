<?php
  //Iniciar Sessão
  session_start();
	//ligação ao servidor e à base de dados
	include "includes/ligamysql.php";
	//indicação do script a ser executado, cmd é definido aqui e de seguida verifica-se no switch que o script a executar
	if (isset($_REQUEST['cmd'])) 
		$cmd=$_REQUEST['cmd']; 
	else 
		$cmd='home';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>StreetWear</title>
</head>
<body>
<?php  
		if (!isset($_SESSION['Email']))
			require 'menu-guest.php'; 
		else
			require 'menu-logged.php'; 
   ?>

<?php		
        switch($cmd) {
          case 'home' : require('home.php');     break;
			//Login
			case 'login-util' : require('login.php');     break;
      //Register
			case 'ins-util' : require('insutil.php');     break;
      //Logout
      case 'logout' : require('logout.php');     break;
      //Account
      case 'edit-profile' : require('account.php');     break;
      //Carrinho
      //case 'carrinho' : require('cart.php');     break;
      //user
      case 'edituser' : require('includes/edituser.php');     break;
      //About
      case 'about' : require('about.php');     break;

			default    : echo "Opção invalida"; break;
		   }
      ?>

</div><br>
<?php
	if (!isset($_SESSION['EmailUtil'])) {
    include "regisform.php";
    include "loginform.php";
  }
?>

</body>
</html>
