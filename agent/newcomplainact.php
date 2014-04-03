#newcomplainact.php


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
$st    							    =$_REQUEST['st'];
$emp1    							    =$_REQUEST['emp1'];
$emp2    							    =$_REQUEST['emp2'];
$item1    							=$_REQUEST['item1'];
$qty1    							=$_REQUEST['qty1'];

$item2    							=$_REQUEST['item2'];
$qty2    							=$_REQUEST['qty2'];

$item3    							=$_REQUEST['item3'];
$qty3    							=$_REQUEST['qty3'];
$div    							=$_REQUEST['div'];

$location 							= $_SESSION['locationname'];
$complaintype2 = $_REQUEST['complaintype2'];
$complaintype3 = $_REQUEST['complaintype3'];
$complaintype4 = $_REQUEST['complaintype4'];

$complaintype5 = $_REQUEST['complaintype5'];
$other = $_REQUEST['other'];

$r = mysql_query("select max(compid) a from tblcomplain");
	$r = mysql_fetch_array($r);
	$r= $r['a'];
	$compid=$r+1;
	// echo $compid ; exit;

if(   ($name =="") && ($text==""))
{

                print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/newcomplain.php?$complainmanu=$compnature&callerid=$phn&compid=$compid'> ";
                exit;
}


if($compnature != "None")
$text=$compnature;
elseif($complaintype2 != "None" )
$text=$complaintype2;
elseif($complaintype3 != "None" )
$text=$complaintype3;
elseif($complaintype4 != "None" )
$text=$complaintype4;
elseif($complaintype5 != "None" )
$text=$complaintype5;


#print "<br>\$compid    		:$compid    		";
#print "<br>\$dte       		:$dte       		";
#print "<br>\$acc       		:$acc       		";
#print "<br>\$phn       		:$phn       		";
#print "<br>\$name      		:$name      		";
#print "<br>\$compnature		:$compnature		";
#print "<br>\$text      		:$text      		";
#print "<br>\$status       :$status    		";

#exit;

if( ($acc =="") && ($phn !="") && ($name =="") && ($text==""))
{
	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/newcomplain.php?$complainmanu=$compnature&callerid=$phn&compid=$compid'> ";
		exit;
}

if( ($acc =="")  || ($name =="") || ($text==""))
{
	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/newcomplain.php?err=1&compid=$compid'> ";
		exit;
}
// salute hai is chutyapey ki coding ko 

$strSQL="
insert into tblcomplain
	( dte, acc, phn, name, compnature, text, status,compid,agent,street,employee1,employee2,division,location)
	values
	( \"$dte\", \"$acc\", \"$phn\", \"$name\", \"$compnature\", \"$text\", \"$status\", \"$compid\", \"".GetAdminID("$UID")."\",\"$st\",\"$emp1\",\"$emp2\",\"$div\",\"$location\")
";

#print "\$strSQL:$strSQL";
 mysql_query("$strSQL")  or die ("Error: ". mysql_error());;

#$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$CallCode = GetAgentCallRecCode(GetAgentCode($UID));

if(is_numeric($CallCode))
{
$strSQL="
update tblagent_call set complainid=$compid,enable=1
where id=$CallCode";
#print "\$strSQL:$strSQL";
mysql_query("$strSQL")  or die ("Error: ". mysql_error());;
}


$AUID=GetAdminID("$UID");
if(($item1 >0) && ($qty1 !=""))
{


	$strSQL		= "
	select * from  tblitems
	where id=$item1
	and  (qty-hold) >=$qty1 
	agentname <> \"$ffuid\"
	";
//	print "\$strSQL : $strSQL<br>";
	$QueryResult1	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
#$myRow1		= mysql_fetch_array($QueryResult1)	

		if ($myRow1		= mysql_fetch_array($QueryResult1)){




$strSQL		= "


insert into `tblitemtrans` 
	( itemcode, dateofact, action, user, remarks, complaincode,qty)
	values
	( '$item1', sysdate(), 'OUT', '$AUID', '$text', '$compid',$qty1)
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$strSQL		= "


update tblitems
set qty=qty-$qty1
where id=$item1
";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	}
}






if(($item2 >0) && ($qty2 !=""))
{



	$strSQL		= "
	select * from  tblitems
	where id=$item2
	and  (qty-hold) >=$qty2 
	agentname <> \"$ffuid\"
	";
//	print "\$strSQL : $strSQL<br>";
	$QueryResult1	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
#$myRow1		= mysql_fetch_array($QueryResult1)	

		if ($myRow1		= mysql_fetch_array($QueryResult1)){


$strSQL		= "


insert into `tblitemtrans` 
	( itemcode, dateofact, action, user, remarks, complaincode,qty)
	values
	( '$item2', sysdate(), 'OUT', '$AUID', '$text', '$compid',$qty2)
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$strSQL		= "


update tblitems
set qty=qty-$qty2
where id=$item1
";


#print "Operation successful , please wait";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
 }
	
}


if(($item3 >0) && ($qty3 !=""))
{

	$strSQL		= "
	select * from  tblitems
	where id=$item3
	and  (qty-hold) >=$qty3
	agentname <> \"$ffuid\"
	";
//	print "\$strSQL : $strSQL<br>";
	$QueryResult1	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
#$myRow1		= mysql_fetch_array($QueryResult1)	

		if ($myRow1		= mysql_fetch_array($QueryResult1)){



$strSQL		= "


insert into `tblitemtrans` 
	( itemcode, dateofact, action, user, remarks, complaincode,qty)
	values
	( '$item3', sysdate(), 'OUT', '$AUID', '$text', '$compid',$qty3)
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$strSQL		= "


update tblitems
set qty=qty-$qty3
where id=$item1
";


#print "Operation successful , please wait";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

 }	
}
#print "Operation successful , please wait";


	

 
print " Your complain number $compid has been successfully recorded.<br> This screen will be redirected to <a href=complainthread.php?id=$compid>Complain Detail</a>";
print "<META HTTP-EQUIV=Refresh CONTENT='5; URL={$constant['relpath']}/complainthread.php?id=$compid'> ";
?>
