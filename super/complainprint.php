<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$id = $_REQUEST['id'];
$ffcompid = $_REQUEST['id'];
$err = $_REQUEST['err'];

$text = $_REQUEST['text'];
$compnature = $_REQUEST['compnature'];
$status = $_REQUEST['status'];
$ccompid = $_REQUEST['ccompid'];

if( ($ccompid !="") && ($text!=""))
{

$strSQL		= "

insert into tblcomplainthread
	( descr, dateofact, compid,agent)
	values
	( '$text', sysdate(), $ccompid,'".GetAdminID("$UID")."')

";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$strSQL		= "

update tblcomplain
set compnature=$compnature ,status=$status
where compid=$ccompid
";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

print "Complain is updated successfully";
	
	print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/complainthread.php?id=$ffcompid'> ";
	exit;	
}

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/complainprint.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));
$lay->replace('TF_ERR',"");
$lay->replace('TF_MSG',$err);
$TEMP=parseCurrentDate1("");
$lay->replace('TF_Date',$TEMP);

$strSQL		= "

select * from tblcomplain where compid=$id
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow=mysql_fetch_array($QueryResult);
 $dte=$myRow['dte'];
 $acc=$myRow['acc'];
 $phn=$myRow['phn'];
 $name=$myRow['name'];
 $compnature=$myRow['compnature'];
 $text=$myRow['text'];
 $status=$myRow['status'];
 $compid=$myRow['compid'];
 $agent=$myRow['agent'];
 $division=$myRow['division'];
 $employee1=$myRow['employee1'];
 $employee2=$myRow['employee2'];
 $street=$myRow['street'];
 $division=$myRow['division'];
 $agent=$myRow['agent'];
 
$strSQL		= "

select * from tblcomplaintype where id='$compnature'
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow=mysql_fetch_array($QueryResult);

$complaintype=$myRow['complaintype'];

$lay->replace('TF_ComplainNature',$complaintype."<input type=hidden name=ccompid value=$ffcompid>");
$cstatus="Pending";
if($status)
{
	$cstatus="Solved";
}

$lay->replace('TF_St',$street);

$lay->replace('TF_emp1',GetEmployeeNameOnly($employee1) );
$lay->replace('TF_emp2',GetEmployeeNameOnly($employee2) );
$lay->replace('TF_empD1',GetEmployeeDesignation($employee1) );
$lay->replace('TF_empD2',GetEmployeeDesignation($employee2) );

$lay->replace('TF_DIV',$division );
$lay->replace('TF_agent',$agent);








$lay->replace('TF_Date',$dte);
$lay->replace('TF_Acc',$acc);
$lay->replace('TF_Phn',$phn);
$lay->replace('TF_Name',$name);
$lay->replace('TF_text',$text);
$lay->replace('TF_CStatus',$cstatus);
$lay->replace('TF_ComplainNo',$compid);
$lay->replace('TF_ComplainNature',$agent);


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
if($id==$compnature)
{
	$str.="<option value=$id selected>$heading</option>";
}
else
$str.="<option value=$id>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature1',$str);

$strSQL		= "
select * from tblcomplainthread where compid='$ffcompid'
";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
while($myRow=mysql_fetch_array($QueryResult))
{
		$text=$myRow['descr'];
		$dte=$myRow['dateofact'];
		$id=$myRow['id'];
		$agent=$myRow['agent'];
$str.="
          <tr>
            <td><span class=\"style14\">$id</td>
            <td><span class=\"style14\">$dte</span></td>
               <td><span class=\"style14\">$agent</span></td> 
            <td><span class=\"style14\">$text</span></td>
            
          </tr>

";	
}

$lay->replace('TF_TABLE',$str);


$strSQL		= "
select * from tbldocs where compid='$ffcompid'
order by id
";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
while($myRow=mysql_fetch_array($QueryResult))
{
		$text=$myRow['name'];
		#print $text;
$str.="
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href=upload/$text>$text</a></td>
          </tr>

";	

}
#print "$str:$str";
$lay->replace('TF_DOC_TABLE',$str);

$lay->replace('TF_ComplainPrev',"<a href=complainmain1.php>Search Complains</a>");
$lay->replace('TF_PHONE',$callerid);


#print $select;
#exit;

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