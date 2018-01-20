<?php 
	$host="localhost";
	$user="root";
	$mdp="";
	$db="db_ sonia boutique";
	$link=mysqli_connect($host,$user,$mdp);
	mysqli_select_db($link,$db);
 ?>