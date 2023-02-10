<?php
	$sql="select * from Cliente D, TipoUtilizador E where D.CodTipoUtil=E.CodTipoUtil";
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
		$sql.=" and (D.CodTipoUtil ='$filtro')";
	
	//pesquisa
	if (isset($_REQUEST['pesquisa']) && $_REQUEST['pesquisa']!=''){
		$pesquisa1=$_REQUEST['pesquisa']; 
		$pesquisa='%'.$_REQUEST['pesquisa'].'%'; 
	}
	else 
		$pesquisa='';
	
	if ($pesquisa !='')
		$sql.=" and ((Email like '$pesquisa'))";
		
	$res=$lig->query($sql);
	$nr=$res->num_rows;
	$qp=$nr/$tp+1;	
	$sql.=" limit $ini,$tp";
	$res=$lig->query($sql);	
	
	
?>
	<div class="container" align="center" >
	<form align="center" method="POST" action="index.php?cmd=list-emp">  
	
		<div class="form-group">
			<label class="control-label col-sm-3" align="right" for="Designacao">Seleccione o email: </label>
			<div class="col-sm-2"> 
			<select class="form-control" name="filtro" >
				<option value="">  </option>
				<?php 
					$sql2="select * from Cliente";
					$res2=$lig->query($sql2);
					while($lin2=$res2->fetch_array())
					{	if($lin2[CodUtil]==$filtro)
							echo "<option value=",$lin2['CodUtil']," selected>",$lin2['Email'],"</option>";
						else
							echo "<option value=",$lin2['CodUtil'],">",$lin2['Email'],"</option>";
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
		echo "<center><a style='border-style: solid; padding:4px; border-width: thin;' href=index.php?cmd=list-emp>Listar todos os Clienetes</a></center>";
?>
<div class="container">
  <h1 align="center">Listagem de Clientes</h1> <br><br>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>	
		<th>Tipo Utilizador</th>
        <th>Foto</th>
	
      </tr>
    </thead>
    <tbody>
<?php while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin[CodUtil]; ?></td>
        <td><?php echo$lin[NomeUtil]; ?></td>
        <td><?php echo$lin[Email]; ?></td>
        <td><?php echo$lin[Pass]; ?></td>
		<td><?php echo$lin[CodTipoUtil]; ?></td>
        <td><?php echo$lin[Foto]; ?></td>
		
        <td><a href=index.php?cmd=ediemp&cod=<?php echo $lin[CodUtil]; ?>>Alterar</a></td>
		<td><a href=index.php?cmd=delemp&cod=<?php echo $lin[CodUtil]; ?>>Apagar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>