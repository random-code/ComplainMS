<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

require_once ("{$constant['class_path']}/islayout.php");

$ffkey		= $_REQUEST['key'];

$lay = new IS_Layout("{$constant['temple_path']}/Quotation.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"Cpanel");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


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
$tbldata="";
if($ffkey != '')
{
$strSQL		= "
select a.*,b.name cityname from tblcustomer a , tblcity b
where ( company like '$ffkey%' or a.name like '$ffkey%' or mname like '$ffkey%' or email like  '$ffkey%' )
and a.city =b.id

";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

while($myRow=mysql_fetch_array($QueryResult))
{
	$id							=$myRow['id'];		
	$accno							=$myRow['accno'];		
	$company							=$myRow['company'];		
	$name							=$myRow['name'];		
	$lname							=$myRow['lname'];		
	$mname							=$myRow['mname'];		
	$cityname							=$myRow['cityname'];		
	$phone					=$myRow['phone'];
	$cell							=$myRow['cell'];
	$email							=$myRow['email'];	
	
	$tbldata .="
	
	 		<tr>
         <td>$company</td>
         <td>$name $mname $lname</td>
         <td>$phone/$cell</td>
         <td>$email</td>
         <td>$cityname</td>
         <td><a href=Quotation2.php?accno=$accno>Add Quotation</a></td>
       </tr>
	";
	
}



}


$strSQL		= "
select id,name from tblsector";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select="";
while($myRow=mysql_fetch_array($QueryResult))
{
	$id							=$myRow['id'];		
	$name							=$myRow['name'];		
	$select .= "<tr><td align=right>$name</td>\n";
	$select .= "<td></td>\n";
	$select .= "<td><input type=\"checkbox\" name=\"sector[]\" value=\"$id\"></td></tr>\n";
}

$lay->replace('TF_SECTOR',$select);
$lay->replace('TF_TBLDATA',$tbldata);


$lay->display();

exit;		
?>	