<?php
$ddsg=$_REQUEST['tddsg'];
$sql="insert into tiposdespesa (tddsg) values ('$ddsg')";
$lig->query($sql) or die("ERRO:Inserção na tabela Tipo de Despesas");
echo "Tipo de Despesas inserido com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-tpdes>";
?> 
