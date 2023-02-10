<?php
$utilnome=$_REQUEST['NomeUtil'];
$emailutil=$_REQUEST['Email'];
$senhautil=$_REQUEST['Pass'];

$utilfoto=$_FILES['Foto']['name'];
$path="images/utilizador/";
$dest=$path.$utilfoto;
$orig=$_FILES['Foto']['tmp_name'];
echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
    $sql="insert into Cliente (NomeUtil,Email,Pass,Foto) values ('$utilnome','$emailutil',md5('$senhautil'),'$dest')";
    echo $sql;
    $lig->query($sql);
    echo "Utilizador inserido com o ID:",$lig->insert_id;
	echo "Copia do ficheiro '$utilfoto' efectuado com sucesso<br>";
}else{
	echo "Directoria sem direitos de escrita<br>";
}
echo "Alguma informação da transferência<br>";
print_r($_FILES);

echo "<meta http-equiv=refresh content=1;URL=index.php>";
?>