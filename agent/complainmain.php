<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");


$ffheading		= $_POST['heading'];
$ffmessage		= $_POST['message'];
$ffstatus		= $_POST['status'];
$ffadmin		= $_POST['admin'];
$ffcompid		= $_POST['compid'];
$fflineid		= $_POST['lineid'];
$ffaccno		= $_POST['accno'];
$ffsmsid		= $_POST['smsid'];
$ffclear		= $_POST['clear'];



$ffisresolved		= $_POST['isresolved'];
if($ffisresolved == "")
$ffisresolved=0;

if(!($ffclear))
$ffclear=0;



#print "\$ffsmsid : $ffsmsid<br>";
#print "\$ffclear : $ffclear<br>";
#print "\$ffisresolved : $ffisresolved<br>";
#exit;

if($ffclear)
{
$strSQL		= "

update tblsms
set isdone=1
where id in ($ffsmsid)

";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
}

//$lay->replace('TF_MSG',$err);

if($ffclear) $ffclear=0;
else $ffclear=1;


$err="";

#exit;



#print "\$ffisresolved : $ffisresolved<br>";
#print "\$ffsmsid : $ffsmsid<br>";
#exit;





#print "\$ffheading : $ffheading <br>";
#print "\$ffmessage : $ffmessage <br>";
#exit;

$AlreadyExist=0;

if($AlreadyExist==1)
{
	$err ="Complain Already existed!";	
}
else
{
$err ="Complain added ! please dont refresh";	
$strSQL		= "
insert into tblcomplains
	( heading, description, dateofact, isresolved, 
	status, accno, lineid, adminuid,smsid,complaintype)
	values
	( '$ffheading', '$ffmessage', sysdate(), $ffisresolved, 
	'$ffstatus', $ffaccno, 1, '$ffadmin','$ffsmsid',$ffclear)
";
#print "\$strSQL : $strSQL";
#exit;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

}


	print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/linedetail.php?line=$fflineid&accno=$ffaccno&compid=$ffcompid''> ";


exit;		
?>	