<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/AddCustomer.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


#$lay->replace('TF_ResellerName',GetResellerName($AUID));
$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_MSG',$err);


	$lay->replace('TF_EXT',"");
	$lay->replace('TF_WebPassword',"");
	$lay->replace('TF_Name',"");
	$lay->replace('TF_DirectPhone',"");
	$lay->replace('TF_FaxNumber',"");
	$lay->replace('TF_ForwardingNumber',"");
	$lay->replace('TF_ZapChannel',"");
	
$lay->replace('TF_Deparment',$Tmp);

$strSQL		= "                                                                 	
select id,name from tblcity";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select = "<select name=city>";

while($myRow=mysql_fetch_array($QueryResult))
{
	$id=$myRow['id'];
	$name=$myRow['name'];
	$select .= "<option value=$id>$name</option>";
	}
	$select .= "</select>";

$lay->replace('TF_CITY',$select);

$strSQL		= "                                                                 	
select id,name from tblsector";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select = "<select name=sector>";

while($myRow=mysql_fetch_array($QueryResult))
{
	$id=$myRow['id'];
	$name=$myRow['name'];
	$select .= "<option value=$id>$name</option>";
	}
	$select .= "</select>";
$lay->replace('TF_SECTOR',$select);






$strSQL		= "                                                                 	
select id,make,registration from tblvans";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select = "<select name=van>";

while($myRow=mysql_fetch_array($QueryResult))
{
	$id=$myRow['id'];
	$name=$myRow['make'] . "/" .$myRow['registration'] ;
	$select .= "<option value=$id>$name</option>";
	}
	$select .= "</select>";
$lay->replace('TF_VAN',$select);




$lay->display();

exit;		
?>	