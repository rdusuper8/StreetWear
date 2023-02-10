<?php
	$sql="select * from TipoUtilizador where 1=1";
  $tp=2;
	if (isset($_REQUEST['pag'])) $np=$_REQUEST['pag']; else $np=1;
	$ini=($np-1)*$tp; //registo inicial a ser mostrado
	
	if (isset($_REQUEST['filtro']) && $_REQUEST['filtro']!='')
		$filtro=$_REQUEST['filtro']; 	 
	else 
		$filtro='';
	
	if ($filtro !='') 
		$sql.=" and (CodTipoUtil ='$filtro')";
	
	//pesquisa
	if (isset($_REQUEST['pesquisa']) && $_REQUEST['pesquisa']!=''){
		$pesquisa1=$_REQUEST['pesquisa']; 
		$pesquisa='%'.$_REQUEST['pesquisa'].'%'; 
	}
	else 
		$pesquisa='';
	
	if ($pesquisa !='')
		$sql.=" ((TipoUtil like '$pesquisa'))";
		
	$res=$lig->query($sql);
	$nr=$res->num_rows;
	$qp=$nr/$tp+1;
		
	
	
?>
	<div class="container" align="center" >
	<form align="center" method="POST" action="index.php?cmd=list-tipo">  
	
		<div class="form-group">
			<label class="control-label col-sm-3" align="right" for="Designacao">Seleccione tipo utilizador: </label>
			<div class="col-sm-2"> 
			<select class="form-control" name="filtro" >
				<option value="">  </option>
				<?php 
					$sql2="select * from TipoUtilizador";
					$res2=$lig->query($sql2);
					while($lin2=$res2->fetch_array())
					{
						if(isset($filtro)&&($filtro!='')&&($filtro==$lin2['CodTipoUtil']))
							echo "<option value=",$lin2['CodTipoUtil']," selected>",$lin2['TipoUtil'],"</option>";
						else
							echo "<option value=",$lin2['CodTipoUtil'],">",$lin2['TipoUtil'],"</option>";
					}
				?>
			</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" align="right" for="Designacao">Pesquisar: </label>
			<div class="col-sm-2"> 
			<input type="text" name="pesquisa" value=<?php echo ($pesquisa1!='')? $pesquisa1:'';?>>
			</div>
		</div>		
		
			<div class="col-sm-1"> 
				<button type="submit" class="btn btn-default">Filtrar</button>
			</div>
	</form>
	<p align="center">
	</div>
	<br><br>
	
	
<?php	
	if ($filtro !='')
		echo "<center><a style='border-style: solid; padding:4px; border-width: thin;' href=index.php?cmd=list-tipo>Listar todos os tipod de Utilizador</a></center>";
?>
<div class="container">
  <h1 align="center">Listagem de Tipos de Utilizadores</h1> <br><br>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Tipo Utilizador</th>
      </tr>
    </thead>
    <tbody>
<?php while ($lin=$res->fetch_array()){ ?>
      <tr>
	<td><?php echo$lin['CodTipoUtil']; ?></td>
        <td><?php echo$lin['TipoUtil']; ?></td>
	<td><a href=index.php?cmd=editipo&cod=<?php echo $lin['CodTipoUti']; ?>>Alterar</a></td>
		<td><a href=index.php?cmd=deltipo&cod=<?php echo $lin['CodTipoUtil']; ?>>Apagar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>