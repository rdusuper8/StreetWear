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
    <title>StreetWear</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>StreetWear</h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="#">Shop</a>
        <a href="index.php?cmd=about">About</a>
        <a href="#">Contact</a>
        <a href="index.php?cmd=edit-profile">Account</a>
        <a href="index.php?cmd=logout">Logout</a>
      </nav>
    </header>
   
    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
