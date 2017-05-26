<?php

$hostname_con1 = "localhost";
$database_con1 = "Vaccine";
$username_con1 = "root";
$password_con1 = "12345";
$con1 = mysql_connect($hostname_con1, $username_con1, $password_con1) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("set NAMES tis620");
   	mysql_connect($hostname_con1,$username_con1,$password_con1);
	mysql_select_db($database_con1);


?>