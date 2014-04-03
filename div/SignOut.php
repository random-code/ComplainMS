<?php
//exit;

	
	require_once("_constants.php");
	require_once ("{$constant['class_path']}/islayout.php");
	
	
		$_SESSION = array();

		// If it's desired to kill the session, also delete the session cookie.
		// Note: This will destroy the session, and not just the session data!
		if (isset($_COOKIE[session_name()])) {
		   setcookie(session_name(), '', time()-42000, '/');
		}
		
		// Finally, destroy the session.
		@session_destroy();


	$lay = new IS_Layout("{$constant['temple_path']}/login.htm");
	$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
	$lay->replace('TF_MSG',"");
	$lay->display();
	
?>	
	
	
	
	 