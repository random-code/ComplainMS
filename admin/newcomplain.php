<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$line = $_REQUEST['line'];
$accno = $_REQUEST['accno'];
$compid = $_REQUEST['compid'];
$complainmanu = $_REQUEST['complainmanu'];
$callerid = $_REQUEST['callerid'];
$err = $_REQUEST['err'];

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/newcomplain.html");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));
if($err)
{
	$lay->replace('TF_ERR',"Error: All fields are required.");
}
else
$lay->replace('TF_ERR',"");
$lay->replace('TF_MSG',$err);
$TEMP=parseCurrentDate1("");
$lay->replace('TF_Date',$TEMP);

if($compid =="")
{
	$compid=getNewCompid();
}
$lay->replace('TF_ComplainNo',$compid . "<input type=hidden name=compid  value='$compid'>");


//my code
$strSQL		= "

select * from tblcomplaintype
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=compnature>";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
if($id==$complainmanu)
{
	$str.="<option value=$id selected>$heading</option>";
}
else
$str.="<option value=$id>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature',$str);

$lay->replace('TF_ComplainPrev',"<a href=complainmain1.php>Search Complains</a>");
$lay->replace('TF_PHONE',$callerid);


#print $select;
#exit;
$lay->replace('TF_forwarded1',$select . "<input type=hidden name=smsid value=$smsid><input type=hidden name=lineid value=$LineCode><input type=hidden name=accno value=$accno>");

$lay->display();

exit;	


function parseCurrentDate1($Pdate)
 {
		//$r = Db->ExecuteQuery("select curdate()");
		$r[0]=$Pdate;
		if($Pdate=="")
		{
		$r = mysql_query("select sysdate() a");
		$r = mysql_fetch_array($r);
		$r= $r['a'];
		}
		
				 		
   	return $r."<input type=hidden name=dte value='$r'>";
 }
 
function getNewCompid()
{
	
	$r = mysql_query("select max(compid) a from tblnewcomplainnum");
	$r = mysql_fetch_array($r);
	$r= $r['a'];
	
	if($r == "")
	{
		$r=1;
	
	}
	else
	{
		$r=$r+1;
	}
		
 mysql_query("update  tblnewcomplainnum set compid=$r")  or die ("Error: ". mysql_error());;
return $r;
} 	
?>	