<?php

Header('Cache-Control: no-cache');
Header('Pragma: no-cache');      

require_once("_constants.php");
include("Authorize.php");
require_once("_Db.php");

	$ffdorefresh		= $_POST['dorefresh'];
	
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
#print "if( ($CanRefresh) && ($agentactive!=2) )";
if( ($CanRefresh) && ($agentactive!=2) )
{
	print "Waiting for call...";
}
else
{
$strSQL		= "

select a.* from tblincomingcalls a 
where agentid='$Agentcode'
order by callarrivaltime desc limit 0,1

";
#print $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	

$callerid=$myRow['callerid'];
$mainmanu=$myRow['mainmanu'];
$complainmanu=$myRow['complainmanu'];
$wants=" and he wants to talk to operator<br>Best Action : Chose option from right menu";

if($complainmanu==1) # new complain
{
$wants=" and he wants to complain.<br>Best Action : <a href=newcomplain.php?complainmanu=$complainmanu&callerid=$callerid>Register Complain</a>";
if($mainmanu==1)
$wants=" and he wants to complain in enm.<br>Best Action : <a href=newcomplain.php?complainmanu=$complainmanu&callerid=$callerid>Register Complain</a>";
elseif($mainmanu==2)
$wants=" and he wants to complain in bnr.<br>Best Action : <a href=newcomplain.php?complainmanu=$complainmanu&callerid=$callerid>Register Complain</a>";
elseif($mainmanu==3)
$wants=" and he wants to complain in fns.<br>Best Action : <a href=newcomplain.php?complainmanu=$complainmanu&callerid=$callerid>Register Complain</a>";


}
elseif($complainmanu==2)
{
$wants=" and he wants to get feedback from existing complain" . "<br>Best Action : <a href=complainmain1.php?clid=$callerid>Search Complain</a>";;
}



print "<Table>";

print "<Tr>";
print "<Td color=blue>Call coming from...<b>$callerid<br>$wants<b></td>";
print "</Tr>";

#print $strSQL;
$strSQL		= "select * from tblphoneinfo where phone='$callerid'";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow		= mysql_fetch_array($QueryResult);	

$Address="No Address Found";

$block=$myRow['block'];
$flat=$myRow['flat'];
$pno=$myRow['pno'];
$rank=$myRow['rank'];
$name=$myRow['name'];
if($name !="")
{
	$Address="$rank $name from P.No $pno , Flat $flat ,Bloack $block";
}
print "<Tr>";
print "<Td color=blue>Address Lookup: $Address<b></td>";
print "</Tr>";

print "</Table>";
}


?>	
