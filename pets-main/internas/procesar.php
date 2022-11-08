<?php
	
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	extract($_POST);
	echo "<strong>".$nombres. " ".$apellidos;
	echo "<hr>";
	echo $telefono;

?>