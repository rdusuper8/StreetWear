<?php
$ddsg=$_REQUEST['Marca'];
$sql="insert into Marca (Marca) values ('$ddsg')";
$lig->query($sql) or die("ERRO:Inserção na tabela Marca");
echo "Marca inserido com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-dep>";
?> 
