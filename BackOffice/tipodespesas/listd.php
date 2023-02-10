<?php
	$sql="select * from tiposdespesa";
	$res=$lig->query($sql);
?>
<div class="container">
  <h1 align="center">Listagem Tipo de Despesas</h1> <br><br>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
<?php while ($lin=$res->fetch_array()){ ?>
      <tr>
        <td><?php echo$lin[tdcod]; ?></td>
        <td><?php echo$lin[tddsg]; ?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>