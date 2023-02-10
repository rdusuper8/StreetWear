<?php
	$c=$_REQUEST['cod'];	
	$sql="select * from utilizador where UtilCod = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<form method="POST" action=index.php?cmd=upd_emp&cod=<?php echo $c;?> >
Código do Utilizador: <?php echo $c; ?><br>
Nome do Utilizador : <input type="text" name="UtilNome" value="<?php echo $lin['UtilNome'];?>"><br>
Morada : <input type="text" name="MoradaUtil" value="<?php echo $lin['MoradaUtil'];?>"><br>
Email : <input type="text" name="EmailUtil" value="<?php echo $lin['EmailUtil'];?>"><br>
Senha : <input type="text" name="SenhaUtil" value="<?php echo $lin['SenhaUtil'];?>"><br>
Foto : <input type="file" name="UtilFoto" value="<?php echo $lin['UtilFoto'];?>"><br>
<input type="submit" value="Alterar">
</form>