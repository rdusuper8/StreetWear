<?php
$ddsg=$_REQUEST['Cor'];
$sql="insert into Cor (Cor) values ('$ddsg')";
$lig->query($sql) or die("ERRO:Inserção na tabela Cor");
echo "Cor inserida com o ID:",$lig->insert_id;
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-cor>";
?> 
