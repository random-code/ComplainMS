<?php
	require_once("_constants.php");
	// Start MySQL 
	session_start();
	mysql_connect($constant['host'],$constant['dbuser'],$constant['dbuserpass']);
	mysql_select_db($constant['db']);
#	echo $constant['db'];
#	exit;
?>