<?php
	$c=$_REQUEST['cod'];
	$sql="select * from produtos where ProdCod = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Produtos</title>
</head>

<form class="form-horizontal" method="POST" action="index.php?cmd=upddes&cod=<?php echo $c;?>">

<div class="form-group">
    <label class="control-label col-sm-2" for="Codigo">Código Produto </label>
    <div class="col-sm-7">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código do Produto" name="ProdCod" value="<?php echo $c;?>">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Designacao">Produto </label>
    <div class="col-sm-7"> 

      <input type="text" class="form-control" placeholder="Nome Produto" id="Designacao" name="ProdNome" value="<?php echo $lin['ProdNome'];?>">	  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Designacao">Marca </label>
    <div class="col-sm-7"> 
	<select class="form-control" name="CodMarca">
	<?php
	  $sql1="select * from marca";
		$res1=$lig->query($sql1);
		while($lin1=$res1->fetch_array())
		{
      if($lin1['CodMarca']==$lin['CodMarca'])
			echo "<option value=",$lin1['CodMarca']," selected='selected'>",$lin1['NomeMarca'],"</option>";
      else
      echo "<option value=",$lin1['CodMarca'],">",$lin1['NomeMarca'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Designacao">Preço</label>
    <div class="col-sm-6"> 
	
      <input type="number" class="form-control" placeholder="Valor" id="Designacao" name="ProdPreco" value="<?php echo $lin['ProdPreco'];?>">  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Designacao">Foto </label>
    <div class="col-sm-7"> 
	
      <input type="file" class="form-control" placeholder="Foto" id="Designacao" name="ProdFoto" value="<?php echo $lin['ProdFoto'];?>">
	  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Data">Data </label>
    <div class="col-sm-7"> 

      <input type="date" class="form-control" placeholder="Data do Produto" id="Data" name="ProData" value="<?php echo $lin['ProData'];?>">
	  
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-7">
      <button type="submit" class="btn btn-default">Modificar Produto</button>
    </div>
  </div>
</form>