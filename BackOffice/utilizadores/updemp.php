<?php

$dc=$_REQUEST['cod'];
$dg=$_REQUEST['UtilNome'];
$da=$_REQUEST['MoradaUtil'];
$db=$_REQUEST['EmailUtil'];
$do=$_REQUEST['SenhaUtil'];
$dd=$_REQUEST['UtilFoto'];

$sql="update utilizador set UtilNome='$dg', MoradaUtil='$da', EmailUtil='$db', SenhaUtil='$do', UtilFoto='$dd' where UtilCod='$dc'";
echo $sql;
$lig->query($sql) or die("ERRO: alteração da tabela utilizador");
if($lig->affected_rows!=1) echo "ERRO:Registo não modificado";
echo "Alteração efetuada com sucesso!";
//echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-emp>";
?> 