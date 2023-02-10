<?php

$dc=$_REQUEST['cod'];
$dg=$_REQUEST['tipoutil'];

$sql="update tipoutilizador set tipoutil='$dg' where codtipo='$dc'";
echo $sql;
$lig->query($sql) or die("ERRO: alteração da tabela tipoutilizador");
if($lig->affected_rows!=1) echo "ERRO:Registo não modificado";
echo "Alteração efetuada com sucesso!";
//echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tipo>";
?> 