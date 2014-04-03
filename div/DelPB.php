<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");

$id    							=$_REQUEST['id'];			
$phn    							=$_REQUEST['p'];


	$strSQL = "delete from  tblphoneinfo where iid='$id' and phone='$phn'";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/PhoneBook.php'> ";
		exit;

?>
