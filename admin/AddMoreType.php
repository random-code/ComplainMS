<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$city		= $_POST['city'];
require_once ("{$constant['class_path']}/islayout.php");


$lay = new IS_Layout("{$constant['temple_path']}/AddMoreType.htm");
$typename		= $_POST['typename'];
if($typename !="")
{

$strSQL		= "
 insert into tblinventorytypetype(typename) values ('$typename')";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$lay->replace('TF_MSG',"New Type Added Successfully");
	print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/Inventory.php'> ";
}



$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"Reseller");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_MSG',$err);


	
$lay->replace('TF_Deparment',$Tmp);



$strSQL		= "
select id,typename from tblinventorytypetype";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select="<select name=typeid>";
while($myRow=mysql_fetch_array($QueryResult))
{
	$id							=$myRow['id'];		
	$name							=$myRow['typename'];		
	$select .= "<option value=$id>$name</option>\n";
}

$select.="</select>";
$lay->replace('TF_INVTYPE',$select);


$lay->display();

exit;		
?>	