<?php
	$n = $_GET["n"]; 
	$p = md5($_GET["p"]);
	$lig= new mysqli ("papserver.aelc.pt", "goncalo28511", "leal2021", "goncalo28511"); 
	$s="select * from utilizador where utimail = '$n' and utipas = '$p'";
	$res=$lig->query($s); 
	$l=$res->fetch_array();
	if (!$l){
		echo "*Email ou Palavra-Passe errados!!";
		return false;
	}
?>
