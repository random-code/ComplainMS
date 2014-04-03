<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/Customer.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");

$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));

$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_MSG',$err);



$lay->replace('TF_Rate',$select);
$lay->display();

exit;		
?>	