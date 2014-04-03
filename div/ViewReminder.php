<?
Header('Cache-Control: no-cache');
Header('Pragma: no-cache');      

require_once("_constants.php");
include("Authorize.php");
require_once("_Db.php");
require_once("General.php");

$fday  		= $_POST['fday'];
$fmon  		= $_POST['fmon'];
$fyear  	= $_POST['fyear'];
$tday  		= $_POST['tday'];
$tmon  		= $_POST['tmon'];
$tyear  	= $_POST['tyear'];
$hour  	= $_POST['hour'];
$min  	= $_POST['min'];
$msg  	= $_POST['msg'];


$clr  	= $_REQUEST['clr'];
$id  	= $_REQUEST['id'];

#print 
if($msg !="")
{
	$strSQL		= "                                                                 	
insert into tblreminder 
	( message, createdate, reminderdate, agentcode)
	values
	( '$msg', sysdate(), '$fyear-$fmon-$fday $hour:$min:00', '".GetAgentCode($UID)."')


 ";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	print "Success";
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/ViewReminder.php'> ";
exit;
	}

if( ($clr !="") && ($id !="") )
{
	$strSQL		= "                                                                 	
	update tblreminder set clear=1 where id=$id
";	
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	print "Success";
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/ViewReminder.php'> ";
exit;

}

?>





<?php




$ff_D  	= $_GET['d'];

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/ViewReminder.htm");
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);
$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");


$lay->replace('TF_TIMEOUT',"$rtime");
#print "$UID <br>";
#exit;
#print GetAdminName($AUID)."<br>";

$lay->replace('TF_SEARCHRESULT',"");

$strSQL		= "
select * from tblagent where exten='$UID'";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	
$agentactive= $myRow['agentactive'];	
#print "$agentactive <br>";
#exit;

$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));

$hour="<select name=hour>";
for($i=0;$i<=11;$i++)
{
	if(strlen($i)==1)
	$i="0$i";
$hour .="<option value=$i>$i</option>";
}
$hour.="</select>";

$min="<select name=min>";
for($i=0;$i<=59;$i++)
{
	if(strlen($i)==1)
	$i="0$i";
$min .="<option value=$i>$i</option>";
}
$min.="</select>";

$TEMP=parseCurrentDate("");

#$lay->replace('TF_From',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select>");

$lay->replace('TF_DATE',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select> $hour:$min");

$lay->replace('TF_DATA',"$str");


$table="
";
$strSQL		= "select a.*,unix_timestamp(reminderdate)- unix_timestamp(sysdate()) diff from tblreminder a where agentcode='".GetAgentCode($UID)."' and clear=0 order by reminderdate desc";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

while($myRow	= mysql_fetch_array($QueryResult)	)             
{
	$cnt++;                      

$id          	=$myRow['id'];       
$message    =$myRow['message'];
$createdate    =$myRow['createdate']; 
$reminderdate           =$myRow['reminderdate'];       
$agentcode             =$myRow['agentcode'];         
$diff            =$myRow['diff'];        
if($diff <1)
{
	$diff="<font color=red>Passed</font>";
}
else
{
	$diff="<font color=green>Pending</font>";
}
$table.="
          <tr>
            <td>$createdate</td>
            <td>$reminderdate</td>
            <td>$message</td>
            <td>$diff</td>
            <td><a href=ViewReminder.php?clr=1&id=$id>Clear</a></td>
          </tr>

";

}
$lay->replace('TF_TBL',"$table");

$lay->display();
exit;	



	?>
?>

</body>
</html>



