<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

//name

$ffname		= $_POST['name'];
$ffmname		= $_POST['mname'];
$fflname		= $_POST['lname'];


$ffcompany		= $_POST['company'];
$ffstreet1		= $_POST['street1'];
$ffstreet2		= $_POST['street2'];
$ffcity		= $_POST['city'];
$ffstate		= $_POST['state'];
$ffstate		= "NA";

$ffcountry		= $_POST['country'];
$ffzip		= $_POST['zip'];
$ffphone		= $_POST['phone'];
$ffcell		= $_POST['cell'];
$fffax		= $_POST['fax'];
$ffpwd		= $_POST['pwd'];
$ffID		= $_POST['ID'];
$ffemail		= $_POST['email'];
$fftitle		= $_POST['title'];

$ffsector		= $_POST['sector'];
$ffnStreet1		= $_POST['nStreet1'];
$ffncontact1		= $_POST['ncontact1'];
$ffnStreet2		= $_POST['nStreet2'];
$ffncontact2		= $_POST['ncontact2'];
$fftype		= $_POST['type'];
$ffnname1		= $_POST['nname1'];
$ffnname2		= $_POST['nname2'];
$ffvan		= $_POST['van'];

$ffemer1		= $_POST['emer1'];
$ffemer2		= $_POST['emer2'];
$ffemer3		= $_POST['emer3'];

#print "\$ffemer1					: $ffemer1				<br>";
#print "\$ffemer2	      : $ffemer2	    <br>";
#print "\$ffemer3      : $ffemer3    <br>";
#print "\$ffvan	      : $ffvan	    <br>";
#print "\$ffsector      : $ffsector    <br>";
#exit;

$err="";

if($ffname == "")
{
	$err .="<br> Invalid Name";
}

if($ffcompany == "")
{
	$err .="<br> Invalid Company Name";
}
if($ffstreet1 == "")
{
	$err .="<br> Invalid Street Address";
}
if($ffcity == "")
{
	$err .="<br> Invalid City Name";
}
if($ffcountry == "")
{
	$err .="<br> Invalid Country Name";
}
if($ffzip == "")
{
	$err .="<br> Invalid Zip Number";
}
if($ffphone == "")
{
	$err .="<br> Invalid Phone Number";
}
if($ffcell == "")
{
	$err .="<br> Invalid Cell Number";
}
#if($fffax == "")
#{
#	$err .="<br> Invalid Fax Number";
#}

#if($ffID == "")
#{
#	$err .="<br> Invalid Identificatoin";
#}
if ( (strlen($ffpwd) !=4) || !(is_numeric($ffpwd) ) )
{
	$err .="<br>PIN number Must be numeric 4 digits";
}


$strSQL		= "
select * from tblcustomer where email='$ffemail'";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select = "<select name=rate>";
$AlreadyExist=0;
if($myRow=mysql_fetch_array($QueryResult))
{
	$AlreadyExist=1;
}



if($AlreadyExist==1)
{
	$err ="Customer with this email is already existed!";	
}


require_once ("{$constant['class_path']}/islayout.php");
if($err != "")
$lay = new IS_Layout("{$constant['temple_path']}/AddCustomer.htm");
else
$lay = new IS_Layout("{$constant['temple_path']}/AddCustomer1.htm");

$lay->replace('TF_lefttitle',"");



$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));

$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


#$lay->replace('TF_ResellerName',GetResellerName($AUID));
//$lay->replace('TF_MSG',$err);
//$err="";
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

#print $select;
#exit;
$lay->replace('TF_CITY',$select);


	
if($err != "")
{
$lay->replace('TF_MSG',"<b>You have got following errors!</b><br>" .$err);
$lay->display();

exit;		
}

//print $err;

//exit;

$accno=101;
$strSQL		= "
select max(accno) ac from tblcustomer ";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select = "<select name=rate>";
$AlreadyExist=0;
if($myRow=mysql_fetch_array($QueryResult))
{
	$accno=$myRow['ac'];
	$accno++;
}


			
	  
  
	  
  

$err ="Customer added ! please dont refresh.<br> Consider saving/printing the following information.";	
$strSQL		= "
insert into tblcustomer 
	( name,mname,lname, company, street1, street2, city, state, country, zip, phone, cell, fax, pwd, 
	 identification, email, accno, dealerid, createdate,title,nstreet1,nstreet2,ncontact1,ncontact2,sector,vanid,nname1,nname2,iscoperate, emer1, emer2, emer3
	)
	values
	('$ffname','$ffmname','$fflname', '$ffcompany', '$ffstreet1', '$ffstreet2', '$ffcity', '$ffstate', '$ffcountry', '$ffzip', '$ffphone', '$ffcell', '$fffax',  '$ffpwd',
	'$ffID','$ffemail',$accno,'1',sysdate(),'$fftitle','$ffnStreet1','$ffnStreet2','$ffncontact1','$ffncontact2','$ffsector','$ffvan',$fftype,'$ffnname1','$ffnname2','$ffemer1','$ffemer2','$ffemer3') 
		
";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$lay->replace('TF_ACCNO',$accno);
$lay->replace('TF_NAME',$ffname);
$lay->replace('TF_COMP',$ffcompany);
$lay->replace('TF_ST1',$ffstreet1);
$lay->replace('TF_ST2',$ffstreet2);
$lay->replace('TF_CITY',$ffcity);
$lay->replace('TF_STATE',$ffstate);
$lay->replace('TF_COUNTRY',$ffcountry);
$lay->replace('TF_ZIP',$ffzip);
$lay->replace('TF_PHONE',$ffphone);
$lay->replace('TF_CELL',$ffcell);
$lay->replace('TF_FAX',$fffax);
$lay->replace('TF_ID',$ffID);
$lay->replace('TF_EMAIL',$ffemail);
$lay->replace('TF_PIN',$ffpwd);

$lay->replace('TF_emer1',$ffemer1);
$lay->replace('TF_emer2',$ffemer2);
$lay->replace('TF_emer3',$ffemer3);




$lay->replace('TF_MSG',$err);
$lay->display();

exit;		
?>