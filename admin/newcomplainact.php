newcomplainact.php


<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$compid    							=$_REQUEST['compid'];			
$dte       							=$_REQUEST['dte'];
$acc       							=$_REQUEST['acc'];
$phn       							=$_REQUEST['phn'];
$name      							=$_REQUEST['name'];
$compnature							=$_REQUEST['compnature'];
$text      							=$_REQUEST['text'];
$status    							=$_REQUEST['status'];


#print "<br>\$compid    		:$compid    		";
#print "<br>\$dte       		:$dte       		";
#print "<br>\$acc       		:$acc       		";
#print "<br>\$phn       		:$phn       		";
#print "<br>\$name      		:$name      		";
#print "<br>\$compnature		:$compnature		";
#print "<br>\$text      		:$text      		";
#print "<br>\$status       :$status    		";

if( ($acc =="") || ($phn =="") || ($phn =="") || ($name =="") || ($text==""))
{
	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/newcomplain.php?err=1&compid=$compid'> ";
		exit;
}

$strSQL="
insert into tblcomplain
	( dte, acc, phn, name, compnature, text, status,compid,agent)
	values
	( \"$dte\", \"$acc\", \"$phn\", \"$name\", \"$compnature\", \"$text\", \"$status\", \"$compid\", \"".GetAdminID("$UID")."\")
";
 mysql_query("$strSQL")  or die ("Error: ". mysql_error());;
 
print " Your complain number $compid has been successfully recorded.<br> This screen will be redirected to <a href=Home.php?act=1>Home</a>";
print "<META HTTP-EQUIV=Refresh CONTENT='5; URL={$constant['relpath']}/Home.php?act=1'> ";
?>
