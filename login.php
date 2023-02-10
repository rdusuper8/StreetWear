<?php
// função Session_start() é a 1ª instrução do index.php
$u=$_REQUEST['Email'];
$p=$_REQUEST['Pass'];

$sql="select * from Cliente where Email = '$u' and Pass = md5('$p')";
$res=$lig->query($sql);
if ($res->num_rows != 1)
	$sql="select * from Cliente where Email = '$u' and Pass = '$p'";
	$res=$lig->query($sql);

if ($res->num_rows == 1) {// Encontrou apenas 1 utilizador
	$lin = $res->fetch_array();
	$_SESSION['Email']  = $lin['Email'];
	$_SESSION['CodUtil'] = $lin['CodUtil'];
	$_SESSION['Foto']  = $lin['Foto'];
	$_SESSION['NomeUtil']  = $lin['NomeUtil'];
	$_SESSION['Pass']  = $lin['Pass'];
}
print_r($_SESSION);
echo "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
?>
