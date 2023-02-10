<?php

$dc=$_REQUEST['CodMarca'];
$dg=$_REQUEST['NomeMarca'];

$sql="update marca set NomeMarca = '$dg' where CodMarca='$dc'";
$lig->query($sql) or die("ERRO: alteração da tabela marca");
echo "Alteração efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-dep>";
?> 