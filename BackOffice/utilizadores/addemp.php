<H1 align="center"> Adicionar Utilizadores</H1><br><br>

<form class="form-horizontal" method="POST" action="index.php?cmd=ins-emp">
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Nome do Utilizador </label>
    <div class="col-sm-6"> 
	
      <input type="text" class="form-control" id="Designacao" placeholder="Cliente" name="NomeUtil">
	  
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Email </label>
    <div class="col-sm-6"> 
	
      <input type="text" class="form-control" id="Designacao" placeholder="Email do Cliente" name="Email">
	  
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Senha </label>
    <div class="col-sm-6"> 
	
      <input type="password" class="form-control" id="Designacao" placeholder="Password" name="Pass">
	  
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Tipo Utilizador </label>
    <div class="col-sm-7"> 
	<select class="form-control" name="CodTipoUtil">
	<?php
	$sql="select * from TipoUtilizador";
		$res=$lig->query($sql);
		while($lin=$res->fetch_array())
		{
			echo "<option value=",$lin['CodTipoUtil'],">",$lin['TipoUtil'],"</option>";
		}
		echo "</select>";
	?>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-4" for="Designacao">Foto </label>
    <div class="col-sm-7"> 
	
      <input type="file" class="form-control" placeholder="Foto" id="Designacao" name="Foto">
	  
    </div>
  </div>
  
   <br>
  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Adicionar Utilizador</button>
    </div>
  </div>
</form>