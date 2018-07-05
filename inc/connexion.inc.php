<?php

	$host = "locahost";
	$user = "user";
	$pass = "root";
	$bdd = "cnamcp09_nfa083cf1_2017"

	$conn = mysql_connect($host,$user,$pass,) or die(mysql_error());
	
	mysql_select_db($bdd,$conn); 

?>