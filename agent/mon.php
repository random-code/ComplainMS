<?php


#while (list($key,$value) = each($_GET)) {
#
#	$_GET["$key"] = str_replace("zzz", "&", $value);
#		
#}
#
#reset($_GET);
Header('Cache-Control: no-cache');
Header('Pragma: no-cache');      

?>
<meta http-equiv="refresh" content="3">
<?
require_once("_Db.php");




?>



<?
$city = $_GET["city"];
$sector = $_GET["sectorbr"];

$accnolist='';

$strSQL		= "
select name,mname,lname,cell,phone,street1,street2,city,nstreet1,nstreet2,ncontact1,ncontact2,a.accno from tblcustomer a , tblsms b where city in ($city) and sector in ($sector)
and a.accno =b.accno and b.isdone=0 

";

#print "\$strSQL: $strSQL";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$strData="<table border=1  cellpadding=0 cellspacing=0><Tr><td><b>Van Request</b></td><td><b>Name</b></td><td><b>Cell</b></td><td><b>Phone</b></td><td><b>Address</b></td><td><b> Neighbor1 Address</b></td><td><b>Neighbor1 Phone</b></td><td><b>Neighbor2 Address</b></td><td><b>Neighbor2 Phone</b></td><td><b>Signal</b></td></tr>";

while($myRow=mysql_fetch_array($QueryResult))
{
$name =$myRow['name'];
	$mname=$myRow['mname'];
	$lname=$myRow['lname'];
	$cell=$myRow['cell'];
	$phone=$myRow['phone'];
	$street1=$myRow['street1'];
	$street2=$myRow['street2'];
	$city=$myRow['city'];
	$nstreet1=$myRow['nstreet1'];
	$nstreet2=$myRow['nstreet2'];
	$ncontact1=$myRow['ncontact1'];
	$ncontact2=$myRow['ncontact2'];
	$accno=$myRow['accno'];
	$isvanrequested=$myRow['isvanrequested'];
	
	$accnolist .=" $accno , ";
	
	#$strData.= "<Tr><td></td><td><a href=linedetail.php?line=2&accno=$accno&monitoring=1><font color=red>$name $mname $lname</font></a></td><td><font color=red>$cell</font></td><td><font color=red>$phone</font></td><td><font color=red>$street1,$street2</font></td> <td><font color=red>$nstreet1</font></td><td><font color=red>$ncontact1</font></td><td> <font color=red>$nstreet2</font></td><td><font color=red>$ncontact2</font></td> <td><img src=\"danger.gif\" width=\"35\" height=\"35\" /></td></tr>";
		$TD4Van="<td>NONE</td>";
	if($isvanrequested)
	$TD4Van="<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1>VAN REQUESTED</a></td>";

	$strData.= "<Tr>$TD4Van<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1><font color=red>$name $mname $lname</font></a></td><td><font color=red>$cell</font></td><td><font color=red>$phone</font></td><td><font color=red>$street1,$street2</font></td> <td><font color=red>$nstreet1</font></td><td><font color=red>$ncontact1</font></td><td> <font color=red>$nstreet2</font></td><td><font color=red>$ncontact2</font></td> <td><img src=\"danger.gif\" width=\"35\" height=\"35\" /></td></tr>";
	
}

#exit;
$strSQL		= "

select name,mname,lname,cell,phone,street1,street2,city,nstreet1,nstreet2,ncontact1,ncontact2,a.accno from tblcustomer a , tblsms b where city in ($city) and sector in ($sector)
and a.accno =b.accno and b.isdone=-1

";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


while($myRow=mysql_fetch_array($QueryResult))
{
$name =$myRow['name'];
	$mname=$myRow['mname'];
	$lname=$myRow['lname'];
	$cell=$myRow['cell'];
	$phone=$myRow['phone'];
	$street1=$myRow['street1'];
	$street2=$myRow['street2'];
	$city=$myRow['city'];
	$nstreet1=$myRow['nstreet1'];
	$nstreet2=$myRow['nstreet2'];
	$ncontact1=$myRow['ncontact1'];
	$ncontact2=$myRow['ncontact2'];
	$accno=$myRow['accno'];
	
	$accnolist .=" $accno , ";
	
	$isvanrequested=$myRow['isvanrequested'];
	$TD4Van="<td>NONE</td>";
	if($isvanrequested)
	$TD4Van="<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1>VAN REQUESTED</a></td>";

	$strData.= "<Tr>$TD4Van<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1><font color=blue>$name $mname $lname</font></a></td><td><font color=blue>$cell</font></td><td><font color=blue>$phone</font></td><td><font color=blue>$street1,$street2</font></td> <td><font color=blue>$nstreet1</font></td><td><font color=blue>$ncontact1</font></td><td> <font color=blue>$nstreet2</font></td><td><font color=blue>$ncontact2</font></td> <td><img src=\"underconstruction.gif\" width=\"35\" height=\"35\" /></td></tr>";
}





$strSQL		= "

select name,mname,lname,cell,phone,street1,street2,city,nstreet1,nstreet2,ncontact1,ncontact2,accno from tblcustomer where city in ($city) and sector in ($sector)
and accno NOT in ($accnolist -99)

";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

#$strData="<table border=1><Tr><td><b>Name</b></td><td><b>Cell</b></td><td><b>Phone</b></td><td><b>Address</b></td><td><b>Signal</b></td></tr>";

while($myRow=mysql_fetch_array($QueryResult))
{
$name =$myRow['name'];
	$mname=$myRow['mname'];
	$lname=$myRow['lname'];
	$cell=$myRow['cell'];
	$phone=$myRow['phone'];
	$street1=$myRow['street1'];
	$street2=$myRow['street2'];
	$city=$myRow['city'];
		$nstreet1=$myRow['nstreet1'];
	$nstreet2=$myRow['nstreet2'];
	$ncontact1=$myRow['ncontact1'];
	$ncontact2=$myRow['ncontact2'];
	$accno=$myRow['accno'];
	$isvanrequested=$myRow['isvanrequested'];

	
	#$strData.= "<Tr><td>$name $mname $lname</td><td>$cell</td><td>$phone</td><td>$street1,$street2</td><td><img src=\"safe.gif\" width=\"35\" height=\"35\" /></td></tr>";
	#$strData.= "<Tr><td></td><td><font color=Green>$name $mname $lname</font></td><td><font color=Green>$cell</font></td><td><font color=Green>$phone</font></td><td><font color=Green>$street1,$street2</font></td> <td><font color=Green>$nstreet1</font></td><td><font color=Green>$ncontact1</font></td><td> <font color=Green>$nstreet2</font></td><td><font color=Green>$ncontact2</font></td> <td><img src=\"safe.gif\" width=\"35\" height=\"35\" /></td></tr>";
	
		$TD4Van="<td>NONE</td>";
	if($isvanrequested)
	$TD4Van="<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1>VAN REQUESTED</a></td>";

	$strData.= "<Tr>$TD4Van<td><a href=linedetail.php?line=2&accno=$accno&monitoring=1><font color=green>$name $mname $lname</font></a></td><td><font color=green>$cell</font></td><td><font color=green>$phone</font></td><td><font color=green>$street1,$street2</font></td> <td><font color=green>$nstreet1</font></td><td><font color=green>$ncontact1</font></td><td> <font color=green>$nstreet2</font></td><td><font color=green>$ncontact2</font></td> <td><img src=\"safe.gif\" width=\"35\" height=\"35\" /></td></tr>";
}
$strData.="</table>";





#$strData.="</table>";
#print("<BLINK><font color=red>Server Time</font></BLINK> is $firstname $lastname.". date('H:i:s'));
print $strData;
?>
