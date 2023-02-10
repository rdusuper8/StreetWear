<?php
	$c=$_REQUEST['cod'];	
	$sql="select * from tipoutilizador where codtipo = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<form method="POST" action=index.php?cmd=upd_tipo&cod=<?php echo $c;?> >
Código do Tipo de Utilizador: <?php echo $c; ?><br>
Tipo de Utilizador : <input type="text" name="tipoutil" value="<?php echo $lin['tipoutil'];?>"><br>
<input type="submit" value="Alterar">
</form>