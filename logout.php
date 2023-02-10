<?php
unset($_SESSION["NomeUtil"]);
session_destroy();
if(!isset($_SESSION["NomeUtil"]))
echo "<meta http-equiv=refresh content=0;URL=index.php?cmd=home>";
?>