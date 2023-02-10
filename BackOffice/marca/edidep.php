<?php
	$c=$_REQUEST['cod'];
	$sql="select * from marca where CodMarca = $c";
	$res=$lig->query($sql);
	$lin=$res->fetch_array();
?>
<head>
	<title>Editar Marca</title>
</head>

<form class="form-horizontal" method="POST" action="index.php?cmd=upddep&cod=<?php echo $c;?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Codigo">Código Marca </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control" id="Codigo" placeholder="Código da Marca" name="CodMarca" value="<?php echo $c;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Designacao">Designação Marca </label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="Designacao" placeholder="Designação da Marca" name="NomeMarca" value="<?php echo $lin['NomeMarca'];?>">
    </div>
  </div>
  <br>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Modificar Marca</button>
    </div>
  </div>
</form>