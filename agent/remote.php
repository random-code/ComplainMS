<?

Header('Cache-Control: no-cache');
Header('Pragma: no-cache');      

require_once("_constants.php");
include("Authorize.php");
require_once("_Db.php");


$strSQL		= "
select * from tblagent where exten='$UID'";

#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	
$agentactive= $myRow['agentactive'];	
#print "$agentactive <br>";
#exit;
$CanRefresh=$agentactive;
if($agentactive==2)
$CanRefresh=0;
$Agentcode=$myRow['agentcode'];	;

if( ($CanRefresh) && ($agentactive!=2) )
{
	print "Waiting for call<form name=newform><input type=hidden name=dorefresh value=1></form>";
}
else
{
$strSQL		= "

select a.*,b.name compname,b.id compid from tblincomingcalls a , tblcompaign b
where agentid='$Agentcode'
order by callarrivaltime desc limit 0,1

";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	

$callerid=$myRow['callerid'];
$compaignid=$myRow['compid'];
$compaignName=$myRow['compname'];
$callid=$myRow['id'];
print "<Table>";

print "<Tr>";
print "<Td><font size=20x><b>Compaign=$compaignName</b></font></td>";
print "</Tr>";

print "<Tr>";
print "<Td>Call coming from...$callerid </td>";
print "</Tr>";


$strSQL		= "

select a.*,b.name cityname from tblcustomer a,tblcity b
where (right(cell,7) like   right('$callerid',7) 
or
right(phone,7) like   right('$callerid',7) )
and a.city =b.id 
";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
if($myRow		= mysql_fetch_array($QueryResult))
{
#	$callerid=$myRow['callerid'];
$title		=		$myRow['title'];
$name			=		$myRow['name'];
$mname		=		$myRow['mname'];
$lname		=		$myRow['lname'];
$cityname	=		$myRow['cityname'];
$accno		=		$myRow['accno'];

print "<Tr>";
print "<Td>Seems to be an existing customer with following data.</td>";
print "</Tr>";


print "<Tr>";
print "<Td>Name : $title $name $mname $lname</td>";
print "</Tr>";

print "<Tr>";
print "<Td>City : $cityname</td>";
print "</Tr>";


print "<Tr>";
print "<Td><a href=linedetail.php?line=&accno=$accno&cid=$compaignid>View Detail </a>|<a href=Search.php>Seacrh Customer</a></td>";
print "</Tr>";

	
}
else
{
print "<Tr>";
print "<Td>Seems to be unknown calling party.</td>";
print "</Tr>";


print "<Tr>";
print "<Td><a href=LogInquiry.php?line=$callerid&accno=$accno&cid=$compaignid&callid=$callid>Log Inquiry</a>|<a href=AddCustomer.php>Add as prospective customer</a></td>";
print "</Tr>";
	
	
}



print "</Table><form name=newform><input type=hidden name=dorefresh value=2></form>";

	
	
	}	
?>

