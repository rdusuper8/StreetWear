<?php
	$sql="select * from Produtos D, Marca E, Cor F, Categoria G where D.CodMarca=E.CodMarca, D.CodCor=F.CodCor, D.CodCategoria=G.CodCategoria";
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
		$sql.=" and (D.CodMarca ='$filtro')";
	
	//pesquisa
	if (isset($_REQUEST['pesquisa']) && $_REQUEST['pesquisa']!=''){
		$pesquisa1=$_REQUEST['pesquisa']; 
		$pesquisa='%'.$_REQUEST['pesquisa'].'%'; 
	}
	else 
		$pesquisa='';
	
	if ($pesquisa !='')
		$sql.=" and ((Nome like '$pesquisa') or (Marca like '$pesquisa') or (Cor like '%$pesquisa%') or (Categoria like '%$pesquisa%'))";
		
	$res=$lig->query($sql);
	$nr=$res->num_rows;
	$qp=$nr/$tp+1;	
	$sql.=" limit $ini,$tp";
	$res=$lig->query($sql);	
	
	
?>
	<div class="container" align="center" >
	<form align="center" method="POST" action="index.php?cmd=list-des">  
	
		<div class="form-group">
			<label class="control-label col-sm-3" align="right" for="Designacao">Seleccione o Produto: </label>
			<div class="col-sm-2"> 
			<select class="form-control" name="filtro" >
				<option value="">  </option>
				<?php 
					$sql2="select * from Marca";
					$res2=$lig->query($sql2);
					while($lin2=$res2->fetch_array())
					{	if($lin2[CodMarca]==$filtro)
							echo "<option value=",$lin2['CodMarca']," selected>",$lin2['Marca'],"</option>";
						else
							echo "<option value=",$lin2['CodMarca'],">",$lin2['Marca'],"</option>";
					}

					$sql2="select * from Cor";
					$res2=$lig->query($sql2);
					while($lin2=$res2->fetch_array())
					{	if($lin2[CodCor]==$filtro)
							echo "<option value=",$lin2['CodCor']," selected>",$lin2['Cor'],"</option>";
						else
							echo "<option value=",$lin2['CodCor'],">",$lin2['Cor'],"</option>";
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
		echo "<center><a style='border-style: solid; padding:4px; border-width: thin;' href=index.php?cmd=list-des>Listar todos os empregados</a></center>";
?>
<div class="container">
  <h1 align="center">Listagem de Produtos</h1> <br><br>  

<form class="form-horizontal" method="POST" action="index.php?cmd=list-des">

</form>




  <table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
		<th>Cor</th>
        <th>Marca</th>
		<th>Categoria</th>
        <th>Foto</th>
        <th>Valor</th>
      </tr>
    </thead>
    <tbody>
<?php while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin['Nome']; ?></td>
        <td><?php echo$lin['Cor'];?></td>
        <td><?php echo$lin['Marca']; ?></td>
        <td><?php echo$lin['Imagem']; ?></td>
        <td><?php echo$lin['Preco']; ?></td>
        <td><a href=index.php?cmd=edides&cod=<?php echo $lin['CodProduto']; ?>>Alterar</a></td>
		    <td><a href=index.php?cmd=deldes&cod=<?php echo $lin['CodProduto']; ?>>Apagar</a></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
 <div align=center> 
  <?php
  for ($i=1; $i<$qp; $i++) 
	echo "<a href=index.php?cmd=list-des&pag=$i&filtro=$filtro&pesquisa=$pesquisa1>&nbsp$i&nbsp</a>";
	?>
	</div>

</div>