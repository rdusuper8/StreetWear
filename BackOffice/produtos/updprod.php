<?php

$dc=$_REQUEST['ProdCod'];
$dg=$_REQUEST['ProdNome'];
$da=$_REQUEST['ProdPreco'];
$db=$_REQUEST['ProdFoto'];
$do=$_REQUEST['ProData'];
$dd=$_REQUEST['CodMarca'];

$sql="update produtos set ProdNome='$dg', ProdPreco='$da', ProdFoto='$db', ProData='$do', CodMarca='$dd' where ProdCod='$dc'";
$lig->query($sql) or die("ERRO: alteração da tabela produtos");
if($lig->affected_rows!=1) echo "ERRO:Registo não modificado";
echo "Alteração efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-des>";
?> 