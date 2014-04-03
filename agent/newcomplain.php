<?php
session_start();
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
$lay = new IS_Layout("{$constant['temple_path']}/new.html");
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
order by id
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
$str.="<option value='$heading'>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature',$str);








//my code
$strSQL		= "

select * from tblcomplaintype2
order by id
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=complaintype2>";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
$str.="<option value='$heading'>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature2',$str);





//my code
$strSQL		= "

select * from tblcomplaintype3
order by id
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=complaintype3>";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
$str.="<option value='$heading'>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature3',$str);




//my code
$strSQL		= "

select * from tblcomplaintype4
order by id
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=complaintype4>";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
$str.="<option value='$heading'>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature4',$str);




//my code
$strSQL         = "

select * from tblcomplaintype
order by id
";


#print $strSQL;

$QueryResult    = mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=complaintype5>";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
$str.="<option value='$heading'>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature5',$str);





$str="<option value=0>NONE</option>";


$strSQL		= "

select * from tblemployees
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];

$name=$myRow['name'];
$designation=$myRow['designation'];
$str.="<option value=$id>$name-$designation</option>";

}

$str1="<select name=emp1>$str</select>";
$str2="<select name=emp2>$str</select>";

$lay->replace('TF_EMP1',$str1);
$lay->replace('TF_EMP2',$str2);







$lay->replace('TF_ComplainPrev',"<a href=complainmain1.php>Search Complains</a>");
$lay->replace('TF_PHONE',$callerid);


#print $select;
#exit;
$lay->replace('TF_forwarded1',$select . "<input type=hidden name=smsid value=$smsid><input type=hidden name=lineid value=$LineCode><input type=hidden name=accno value=$accno>");

#$callerid

$strSQL		= "select * from tblphoneinfo where (phone='$callerid' or pno='$callerid' or flat ='$callerid' ) AND location = '". $_SESSION['locationname'] ."'";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	



$block=$myRow['block'];
$flat=$myRow['flat'];
$pno=$myRow['pno'];
$rank=$myRow['rank'];
$name=$myRow['name'];
#$name="";
$Address="";
$Address2="";
if($name !="")
{
	$Address="Flat # $flat";
	$Address2="Block # $block";
	$name="$rank $name";
}

$lay->replace('TF_ACCOM',$Address);
$lay->replace('TF_ACCOM2',$Address2);
$lay->replace('TF_NAME',$name);


//my code
$strSQL		= "

select * from tblitems
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$str="<option value=0>None</option>";
while($myRow=mysql_fetch_array($QueryResult))
{
	
#print $cnt;
$cnt++;
$id=$myRow['id'];
$itemdesc=$myRow['itemdesc'];
$qty=$myRow['qty'];

$str.="<option value=$id>$itemdesc-($qty)</option>";
}


$str1="<select name=item1>$str";
$str1.="</select>";

$str2="<select name=item2>$str";
$str2.="</select>";

$str3="<select name=item3>$str";
$str3.="</select>";


$lay->replace('TF_ITEM1',$str1);
$lay->replace('TF_ITEM2',$str2);
$lay->replace('TF_ITEM3',$str3);

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
