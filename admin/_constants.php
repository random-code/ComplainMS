<?php
// Turn off all error reporting
error_reporting(E_ERROR);
?>
<?php

	// Site
	$constant['site']		= "http://www.InBoundPBX.com";
	$constant['domain']		= "InBoundPBX.com";
	$constant['PayPalEmail']	= "web@InBoundPBX.com";


	// Path
	$constant['relpath']		= "../admin";
	$constant['images_path']	= "../images";
	$constant['class_path']		= "../classes";
	$constant['temple_path']	= "../admintemp";


	// Email
	$constant['email_msg']		= "{$constant['domain']}";
	$constant['email_support']	= "admin@InBoundPBX.com";
	$constant['email_sales']	= "admin@InBoundPBX.com";
	$constant['email_info']		= "admin@InBoundPBX.com";
//
//	$constant['host']	= "210.2.136.6";
		$constant['host']       = "localhost";	
	$constant['db']		= "inbound";
	$constant['dbuser']	= "root";
	$constant['dbuserpass']	= "root";



	//NavigationBar
	$constant['LeftNavigation']	= "<table width=\"100%\"  border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Home.php\">Home</a></td></tr>
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Inventory.php\">Inventory</a></td></tr>  
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Vans.php\">Vans</a></td></tr>
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Customer.php\">Customer</a></td></tr>
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Billing.php\">Billing</a></td></tr>
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"Reports.php\">Reports</a></td></tr>
<tr><td background=\"[TF_IMAGE_PATH]/navbg.jpg\" height=\"23\" align=\"right\"><a class=\"nav\" href=\"LogOut.php\">Sign Out</a></td></tr>

  </table>";


$constant['S_R_PATH'] ="/var/www/html/recordings";
$constant['D_R_PATH'] ="/var/www/html/recordings";

$constant['header'] ="<td background=\"ivr/[TF_IMAGE_PATH]/pix.gif\" height=\"50\" width=\"29%\" bgcolor=\"#DBF0DF\"><div align=\"center\" class=\"style2\">
					<b><font color=\"#003333\"> 
                  <em style=\"font-style: normal\"></em></font></b></div></td>
                <td background=\"ivr/[TF_IMAGE_PATH]/pix.gif\" height=\"50\" width=\"52%\" bgcolor=\"#DBF0DF\">
				<p align=\"center\"><font face=\"Verdana\" color=\"#ffffff\">
				<span style=\"FONT-WEIGHT: 700; BACKGROUND-COLOR: #cc9900\"></span></font><b><font face=\"Verdana\" color=\"#ffffff\"><span style=\"BACKGROUND-COLOR: #cc9900\"> 
				Security System <br>  Agent Panel </span></font><font face=\"Verdana\" size=\"2\"><br>
				</font><font face=\"Verdana\" size=\"1\"><br>
				 </font></b></td>
                <td background=\"ivr/[TF_IMAGE_PATH]/pix.gif\" height=\"99\" width=\"19%\" rowspan=\"2\" bgcolor=\"#FFFFFF\">
				<p align=\"center\"><font face=\"Verdana\" size=\"2\">[TF_LOGO]</font></td>
              </tr>
              <tr> 
                <td background=\"ivr/[TF_IMAGE_PATH]/pix.gif\" height=\"49\" width=\"29%\" bgcolor=\"#DBF0DF\">
				<p align=\"center\"><strong>[TF_lefttitle]</strong></td>
                <td background=\"ivr/[TF_IMAGE_PATH]/pix.gif\" height=\"49\" width=\"52%\" bgcolor=\"#DBF0DF\">&nbsp;</td>";

?>
