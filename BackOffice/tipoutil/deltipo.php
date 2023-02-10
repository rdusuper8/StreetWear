<head>
	<title> Tabela utilizador</title>
</head>
<?php
	$c=$_REQUEST['cod'];
	$sql="delete from tipoutilizador where codtipo = $c";
	if(!$lig->query($sql)) {
		echo "Erro delete na tabela tipoutilizador<br>";
		echo "Numero erro:", $lig->error, "<br>";
		echo "Descrição erro:", $lig->error;
		?>
		<form class="form-horizontal" method="POST" action="index.php?cmd=list-tipo">
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default alert-danger">Voltar</button>
				</div>
			</div>
		</form>
<?php
	}
	else {
		echo "Registo eliminado";
		echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tipo>";
	}
?>