<?php
	$q=$_GET["q"];
	$lig= new mysqli ("papserver.aelc.pt", "goncalo28511", "leal2021", "goncalo28511"); 
	$s="select * from utilizador where utimail = '$q'";
	$res=$lig->query($s); 
	$l=$res->fetch_array();
	if($l)
		echo "*Email já existente";
?>
