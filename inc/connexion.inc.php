

	
	<?php
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;      
	$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8'; 
	
	$serveur = 'localhost';
	$bddname = 'cnamcp09_nfa083cf1_2017';
	$loginserveur = 'user';
	$mdpserveur = 'root';
	
	$con = new PDO('mysql:host='.$serveur.';dbname='.$bddname,$loginserveur, $mdpserveur, $pdo_options);
	


?>