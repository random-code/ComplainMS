<?php
require_once("_constants.php");
include("Authorize.php");
require_once("_Db.php");

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
	( '$text', sysdate(), $ccompid,'admin')

";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$strSQL		= "

update tblcomplain
set text='$text' ,status=$status
where compid=$ccompid
";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

print "Complain is updated successfully";
	
	print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/complainthread.php?id=$ffcompid'> ";
	exit;	
}

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/searchthread.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);


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


$strSQL		= "

select * from tblcomplaintype where id='$compnature'
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow=mysql_fetch_array($QueryResult);

$complaintype=$myRow['complaintype'];

$lay->replace('TF_ComplainNature',$division."<input type=hidden name=ccompid value=$ffcompid>");
$cstatus="Pending";
if($status)
{
	$cstatus="Solved";
}

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
		print $text;
$str.="
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><a href=../agent/upload/$text>$text</a></td>
          </tr>

";	

}
#print "$str:$str";
$lay->replace('TF_DOC_TABLE',$str);


$lay->replace('TF_ComplainPrev',"<a href=complainmain1.php>Search Complains</a>");
$lay->replace('TF_PHONE',$callerid);


#print $select;
#exit;


if(1==1)
{
$strSQL = "select complaincode,b.itemdesc,a.dateofact,action,user,remarks,a.qty,itemcode from tblitemtrans a, tblitems b where b.id=itemcode  and
complaincode='$compid'
";

#$compnature

#print "\$strSQL:$strSQL";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
	$itemdesc=$myRow['itemdesc'];
	$dateofact=$myRow['dateofact'];
	$action=$myRow['action'];
	$user=$myRow['user'];
	$remarks=$myRow['remarks'];
	$qty=$myRow['qty'];
	$complaincode=$myRow['complaincode'];
	if($complaincode==0) $complaincode="";
	
	$bgcolor="bgcolor=#99FF66";
	if($action =="OUT")
	$bgcolor="bgcolor=#FDC1D3";
	
	
	
		$sno++;
$str.="
          <tr $bgcolor>
          <td><span class=\"style14\">$sno</span></td>
            <td><span class=\"style14\">$itemdesc</span></td>
            <td><span class=\"style14\">$dateofact</span></td>
            <td><span class=\"style14\">$qty</span></td>
            <td><span class=\"style14\">$action</span></td>
            <td><span class=\"style14\">$user</span></td>
            <td><span class=\"style14\">$remarks</span></td>
       
          </tr>

";	


}

}
$lay->replace('TF_TABLEINV',$str);





if(1==1)
{
$strSQL = "

select filename from tblagent_call a,tblincomingcalls b where a.complainid='$compid' 
and a.callid=b.id
order by a.id

";

#$compnature

#print "\$strSQL:$strSQL";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
	$filename=$myRow['filename'];
	
	
	
		$sno++;
$str.="
          <tr $bgcolor>
          <td><span class=\"style14\">$sno</span></td>
            <td><span class=\"style14\"><a href=/recordings/$filename.wav>$filename</a></span></td>
       
          </tr>

";	


}

}
$lay->replace('TF_TABLEREC',$str);



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