<?php
$prodnome=$_REQUEST['Nome'];
$prodcor=$_REQUEST['CodCor'];
$codmarca=$_REQUEST['CodMarca'];
$codcategoria=$_REQUEST['CodCategoria'];
$prodfoto=$_FILES['Imagem']['name'];
$prodpreco=$_REQUEST['Preco'];

$path="../imagens/produtos/";
$dest=$path.$prodfoto;
$orig=$_FILES['Imagem']['tmp_name'];
echo "A copiar '$orig' para '$dest'<br>";
if (copy ($orig,$dest)) {
$sql="insert into Produtos (Nome,CodCor,CodMarca,CodCategoria,Imagem) values ('$prodnome','$prodcor','$codmarca','$codcategoria','$prodfoto','$prodpreco')";
$lig->query($sql);
echo "Produto inserido com o ID:",$lig->insert_id;
echo "Copia do ficheiro '$prodfoto' efectuado com sucesso<br>";
}else{
	echo "Directoria sem direitos de escrita<br>";
}
echo "Alguma informação da transferência<br>";
print_r($_FILES);
echo "<meta http-equiv=refresh content=1;URL=index.php?cmd=list-des>";
?> 
