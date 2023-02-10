<?php
	$sql="select * from Marca";
	$tp=2;
	if (isset($_REQUEST['pag'])) 
	$np=$_REQUEST['pag']; 
else 
	$np=1; 					//Numero página passada por GET, página 1 caso não seja indicada
$ini=($np-1)*$tp;			

	if (isset($_REQUEST['pag'])) $np=$_REQUEST['pag']; else $np=1;
	$ini=($np-1)*$tp; //registo inicial a ser mostrado
	
	if (isset($_REQUEST['filtro']) && $_REQUEST['filtro']!='')
		$filtro=$_REQUEST['filtro']; 	 
	else 
		$filtro='';
	
	if ($filtro !='') 
		$sql.=" and (CodMarca ='$filtro')";
	
	//pesquisa
	if (isset($_REQUEST['pesquisa']) && $_REQUEST['pesquisa']!=''){
		$pesquisa1=$_REQUEST['pesquisa']; 
		$pesquisa='%'.$_REQUEST['pesquisa'].'%'; 
	}
	else 
		$pesquisa='';
	
	if ($pesquisa !='')
		$sql.=" and ((Marca like '$pesquisa'))";
		
	$res=$lig->query($sql);
	$nr=$res->num_rows;
	$qp=$nr/$tp+1;	
	$sql.=" limit $ini,$tp";
	$res=$lig->query($sql);	
	
	
?>
	<div class="container" align="center" >
	<form align="center" method="POST" action="index.php?cmd=list-dep">  
	
		<div class="form-group">
			<label class="control-label col-sm-3" align="right" for="Designacao">Seleccione a Marca: </label>
			<div class="col-sm-2"> 
			<select class="form-control" name="filtro" >
				<option value="">  </option>
				<?php 
					$sql2="select * from Marca";
					$res2=$lig->query($sql2);
					while($lin2=$res2->fetch_array())
					{	if($lin2['CodMarca']==$filtro)
							echo "<option value=",$lin2['CodMarca']," selected>",$lin2['Marca'],"</option>";
						else
							echo "<option value=",$lin2['CodMarca'],">",$lin2['Marca'],"</option>";
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

<div class="container">
  <h1 align="center">Listagem Marcas</h1> <br><br>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Marca</th>
      </tr>
    </thead>
    <tbody>
<?php while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['CodMarca']; ?></td>
        <td><?php echo$lin['Marca']; ?></td>
        <td><a href=index.php?cmd=edidep&cod=<?php echo $lin['CodMarca']; ?>>Alterar</a></td>
		<td><a href=index.php?cmd=deldep&cod=<?php echo $lin['CodMarca']; ?>>Apagar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>