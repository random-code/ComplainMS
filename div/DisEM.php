<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");

$DIVISION = $_SESSION['DIV'];


$id    							=$_REQUEST['id'];			
$enable    							=$_REQUEST['enable'];


	$strSQL = "
	
	update tblemployees 
	set enable='$enable'
	where id='$id'
	
	";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/Employees.php'> ";
		exit;
	?>	