<?php
require_once("_constants.php");
include("Authorize.php");
require_once("_Db.php");
require_once("General.php");

$ffact		= $_REQUEST['act'];

#if($ffact=="") $ffact=1;
#print "\$UID:$UID..." . GetAgentCode($UID) . "..." . GetAgentCallRecCode(GetAgentCode($UID));
if($ffact !="")
{

$strSQL		= "
update tblagent set agentactive=1 where exten='$UID'";

#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

}
$rtime=3;
require("{$constant['class_path']}/simplejax/includes/simplejax.class.php");

#foreach ($sector as $s) {
##echo $s."<br />";
#$sectorbr .="$s ,";
#}

#print strlen($sectorbr)-1;
#exit;
$sectorbr=substr($sectorbr,0,strlen($sectorbr)-1);
#print $sectorbr;
#exit;
// print "<script type=\"text/javascript\" src=\"{$constant['class_path']}/simplejax/js/ajax_init.js\"></script>";
?>
<?php




$ff_D  	= $_GET['d'];

require_once ("{$constant['class_path']}/islayout.php");
if(isset($_GET['act'])) $lay = new IS_Layout("{$constant['temple_path']}/be_ready_for_call.html");
else  $lay = new IS_Layout("{$constant['temple_path']}/dashboard.html"); 
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
$CanRefresh=$agentactive;
if($agentactive==2)
$CanRefresh=0;

#if($CanRefresh)
{
$lay->replace('TF_FUNCTION',"");
}
#else
{
	$lay->replace('TF_FUNCTION',"function clickMe() {} ");
	}
$lay->replace('TF_CANRefresh',$CanRefresh);

$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");

$special="";

$lay->replace('TF_EXT',"$UID");


$lay->replace('TF_AGENT',GetAdminID("$UID"));



$lay->replace('TF_DATA',"$str");


$lay->display();
$simplejax = new SimpleJax("clickMe", "myform", "remote.php", "mydiv");
exit;	



	?>
?>

</body>
</html>



