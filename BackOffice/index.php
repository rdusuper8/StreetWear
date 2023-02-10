<?php 
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
  <title>Backoffice StreetWear</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
  <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />
  
  
</head>
<body>
	<!--Inclusão do menu apartir de um ficheiro externo-->
   <?php  require 'includes/menu.html'; ?>

  <br><br>
<div class="container-fluid text-center">    
  <div class="row content">
  
	<!--espaço da página onde é mostrado o conteúdo da página-->
    <div class="col-sm-8 text-left"> 
     <?php		
        switch($cmd) {
			case 'home': require('includes/home.php');  break;
			//Marca
			case 'add-marca' : require('marca/adddep.php');     break;
			case 'ins-dep' : require('marca/insdep.php');     break;
            case 'list-dep': require('marca/lisdep.php');   break;
			case 'edidep': require('marca/edidep.php');   break;
			case 'deldep': require('marca/deldep.php');   break;
			case 'upddep': require('marca/upddep.php');   break;
			
			//Cor
			case 'add-cor' : require('cor/addcor.php');     break;
			case 'ins-cor' : require('cor/inscor.php');     break;
            case 'list-cor': require('cor/listcor.php');   break;
			case 'edicor': require('cor/edicor.php');   break;
			case 'delcor': require('cor/delcor.php');   break;
			case 'updcor': require('cor/updcor.php');   break;
			
			//Utilizadores
			case 'add-emp' : require('utilizadores/addemp.php');     break;
			case 'ins-emp' : require('utilizadores/insemp.php');     break;
			case 'list-emp' : require('utilizadores/lisemp.php');     break;
			case 'ediemp' : require('utilizadores/ediemp.php');     break;
			case 'delemp' : require('utilizadores/delemp.php');     break;
			case 'upd_emp' : require('utilizadores/updemp.php');     break;


			//Tipos Utilizadores
			case 'add-tipo' : require('tipoutil/addtipo.php');     break;
			case 'ins-tipo' : require('tipoutil/instipo.php');     break;
			case 'list-tipo' : require('tipoutil/listipo.php');     break;
			case 'editipo' : require('tipoutil/editipo.php');     break;
			case 'deltipo' : require('tipoutil/deltipo.php');     break;
			case 'upd_tipo' : require('tipoutil/updtipo.php');     break;
			
			
			//tipo de despesas
			case 'add-tpdes': require('tipodespesas/addtd.php');   break;
			case 'ins-td': require('tipodespesas/instd.php');	break;
			case 'list-tpdes': require('tipodespesas/listd.php');	break;


			//Produtos
			case 'add-des': require('produtos/adddes.php');	break;
			case 'list-des': require('produtos/lisdes.php');	break;
			case 'ins-des': require('produtos/insdes.php');	break;
			case 'edides': require('produtos/edides.php');	break;
			case 'deldes': require('produtos/delprod.php');	break;
			case 'upddes': require('produtos/updprod.php');	break;

			default    : echo "Opção invalida"; break;
		   }
?>
</div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Agrupamento de Escola Leal da Câmara, Rio de Mouro</p>
</footer>

</body>
</html>