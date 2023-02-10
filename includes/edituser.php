<?php

$dc=$_SESSION['CodUtil'];
$dg=$_SESSION['NomeUtil'];

$sql="update Cliente set NomeUtil='$dg where CodUtil='$dc'";
$lig->query($sql) or die("ERRO: alteração da tabela Cliente");
if($lig->affected_rows!=1) echo "ERRO:Cliente não modificado";
echo "Alteração efetuada com sucesso!";
echo "<meta http-equiv=refresh content=1;URL=index.p
40hp?cmd=edit-profile>";
?> 