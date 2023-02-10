<?php
$tipoutil=$_REQUEST['tipoutil'];
$sql="insert into TipoUtilizador (TipoUtil) values ('$tipoutil')";
$lig->query($sql) or die("ERRO:Inserção na tabela TipoUtilizador");
echo "TipoUtilizador inserido com o Codigo:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tipo>";
?> 
