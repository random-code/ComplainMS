<?php
//exit;

	
	require_once("_constants.php");
	require_once ("{$constant['class_path']}/islayout.php");
	$lay = new IS_Layout("{$constant['temple_path']}/login.htm");
	$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
	$lay->replace('TF_MSG',"");
	$lay->display();
?>	
	
	
	
	 