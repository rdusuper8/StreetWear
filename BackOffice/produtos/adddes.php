
<H1 align="center"> Adicionar Produto</H1><br><br>

<form enctype='multipart/form-data' class="form-horizontal" method="POST" action="index.php?cmd=ins-des">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Produto </label>
    <div class="col-sm-7"> 

      <input type="text" class="form-control" placeholder="Nome Produto" id="Designacao" name="Nome">	  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Cor </label>
    <div class="col-sm-7"> 
	<select class="form-control" name="CodCor">
	<?php
	$sql="select * from Cor";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodCor'],">",$lin['Cor'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Marca </label>
    <div class="col-sm-7"> 
	<select class="form-control" name="CodMarca">
	<?php
	$sql="select * from Marca";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodMarca'],">",$lin['Marca'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Categoria </label>
    <div class="col-sm-7"> 
	<select class="form-control" name="CodCategoria">
	<?php
	$sql="select * from Categoria";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodCategoria'],">",$lin['Categoria'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Foto </label>
    <div class="col-sm-7"> 
	
      <input type="file" class="form-control" placeholder="Foto" id="Designacao" name="Imagem">
	  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Preço</label>
    <div class="col-sm-6"> 
	
      <input type="number" class="form-control" placeholder="Valor" id="Designacao" name="Preco">  
    </div>
  </div>

  </div>
  </div>
   <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Produto</button>
    </div>
  </div>
</form>