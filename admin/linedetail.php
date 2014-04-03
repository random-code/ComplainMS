<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$line = $_REQUEST['line'];
$accno = $_REQUEST['accno'];
$list = $_REQUEST['list'];
$monitoring = $_REQUEST['monitoring'];
$sno = $_REQUEST['sno'];
$cellno = $_REQUEST['cellno'];

$delete = $_REQUEST['delete'];
$bid = $_REQUEST['id'];



require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/linedetail.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"PLans");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_EXT',"$UID");
$lay->replace('TF_AGENT',GetAdminID("$UID"));

$lay->replace('TF_MSG',$err);
$TEMP=parseCurrentDate("");


#print "\$line :$line";
#exit;

$lay->replace('TF_From',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select><input type=hidden name=lineid  value='$line'>");
$lay->replace('TF_To',"<select name=tday>$TEMP[0]</select> - <select name=tmon>$TEMP[1]</select> - <select name=tyear>$TEMP[2]</select>");

$vanid="";
$tSMS="";
//my code
$strSQL		= "select * from tblcustomer where accno=$accno";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$cnt=0;
$tbl="";
$qty=0;
$myRow=mysql_fetch_array($QueryResult);
	
	$vanid							=$myRow['vanid'];		
	$id							=$myRow['id'];		
	$name							=$myRow['name'];		
	$company							=$myRow['company'];		
	$city			=$myRow['city'];		
	
	$currentbal_cents=$myRow['currentbal_cents'];		
	$lname							=$myRow['lname'];		
	$mname							=$myRow['mname'];		
	$phone							=$myRow['phone'];		
	$cell			=$myRow['cell'];		
	$fax	=$myRow['fax'];		
	$accno=$myRow['accno'];		

	$email=$myRow['email'];		
		$city=$myRow['city'];		
			$street1=$myRow['street1'];
			$nname1=$myRow['nname1'];
			$nname2=$myRow['nname2'];	
			$ntype1=$myRow['ntype1'];	
				$street2=$myRow['street2'];		

		$state=$myRow['state'];		
			$country=$myRow['country'];		
				$zip=$myRow['zip'];		
$identification=$myRow['identification'];		


		$nstreet1=$myRow['nstreet1'];		
			$ncontact1=$myRow['ncontact1'];		
				$nstreet2=$myRow['nstreet2'];		
$ncontact2=$myRow['ncontact2'];		
$iscoperate=$myRow['iscoperate'];


$emer1=$myRow['emer1'];		
$emer2=$myRow['emer2'];		
$emer3=$myRow['emer3'];


$secQ=$myRow['securityquestion'];
$secA=$myRow['securityanswer'];

$maturitylevel							=$myRow['maturitylevel'];		
$isvanrequested							=$myRow['isvanrequested'];		

$tSMS="HELP$name-$fname-$street1-$street2";
#print $tSMS;
$str="";



$lay->replace('TF_Plan',"$planname");
$lay->replace('TF_secQ',"$secQ");

$lay->replace('TF_secA',"$secA");


#$strSQL		= "
#
#select did from tbldid where lineid=$LineCode 
#order by did
#";
##print $strSQL;
#$QueryResult2	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
#$ListofDID="<br><b>Numbers List</b><br>";
#while($myRow2=mysql_fetch_array($QueryResult2))
#{
#	$DID =$myRow2['did'];
#	$ListofDID .= "$DID<br>";
#}
#


$lay->replace('TF_Complains',"$NoOfComplains");

$lay->replace('TF_DueAmount',"$DueAmount");


 


 #print "$str";
 #exit;

 	

#print "$name $mname	$lname";
$strSQL		= "

select * from tblcomplains where   accno=$accno 
and isresolved =0
order by dateofact desc limit 0,50

";


 

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$cnt=0;
$tbl="";
$qty=0;

#print $strSQL;

$str="";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['heading'];
$description=$myRow['description'];
$datofact=$myRow['dateofact'];		
$isresolved=$myRow['isresolved'];
$admin=$myRow['adminuid'];
$status=$myRow['status'];
$nlineid=$myRow['lineid'];		
if($admin == "0")
{
	$admin="None";
	}
$andisresolved ="1";
$resolveStatus="";



if($isresolved)
	{
$resolveStatus="Resolved";	
	}
else
	{
$resolveStatus="Not Resolved";	
	
	}


	
$str.="
			<tr class=\"style4\">
							              <td>$cnt</td>		
							              <td>$id</td>		
			                      <td>$heading</td>
                            <td>$description</td>
                            <td>$admin</td>
                            <td>$datofact</td>
                             <td>$status</td>
                             <td>$resolveStatus</td>
                            
                             <td><a href=Fwdlinedetail.php?line=$nlineid&accno=$accno&compid=$id>Update</a> </td>
								</tr>
";
 

}

#print "\$str : $str";


$strSQL		= "

select * from tblcomplains where  accno=$accno 
and isresolved =1
order by dateofact desc limit 0,50
";


 #$strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$cnt=0;
$tbl="";
$qty=0;


$str1="";
while($myRow=mysql_fetch_array($QueryResult))
{
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['heading'];
$description=$myRow['description'];
$datofact=$myRow['dateofact'];		
$isresolved=$myRow['isresolved'];
$admin=$myRow['adminuid'];
$status=$myRow['status'];
		
if($admin == "0")
{
	$admin="None";
	}
	$andisresolved ="0";
$resolveStatus="";


if($isresolved)
	{
$resolveStatus="Resolved";	
	}
else
	{
$resolveStatus="Not Resolved";		
	}

$str1.="
			<tr class=\"style4\">
							              <td>$cnt</td>		
							              <td>$id</td>		
			                      <td>$heading</td>
                            <td>$description</td>
                            <td>$admin</td>
                            <td>$datofact</td>
                             <td>$status</td>
                             <td>$resolveStatus</td>
                           <td><a href=Fwdlinedetail.php?line=$LineCode&accno=$accno&compid=$id>Update</a> </td>
								</tr>
";
 	

}
$sms="NIL";
$smsAdmin="NIL";
$smsTime="NIL";
$smsid='';






$lay->replace('TF_Name',"$name $mname	$lname");

$lay->replace('TF_Company',"$company");

$lay->replace('TF_Address',"$street1 $street2 , $city ,$state,$country,$zip");

$lay->replace('TF_Phone',"$phone");

$lay->replace('TF_Cell',"$cell");

$lay->replace('TF_Fax',"$fax");

$lay->replace('TF_Email',"$email");

$lay->replace('TF_NAM1',"$nname1");

$lay->replace('TF_NAM2',"$nname2");

###########################################
$lay->replace('TF_emer1',"$emer1");

$lay->replace('TF_emer2',"$emer2");

$lay->replace('TF_emer3',"$emer3");

if($maturitylevel==0)
$maturitylevel="<font color=orange>Immature</font>";
elseif($maturitylevel==1)
$maturitylevel="<font color=green>Mature</font>";
else
$maturitylevel="<font color=red>Terminate</font>";


$lay->replace('TF_mlevel',"$maturitylevel");



if ($iscoperate==1)
$iscoperate="Corporate";
else
$iscoperate="Home User";

$lay->replace('TF_Type'," $iscoperate");

$lay->replace('TF_Accno',"$accno");

$lay->replace('TF_Identification',"$identification");

$lay->replace('TF_Balance'," N/A ");

$lay->replace('TF_DATA',"$str");
$lay->replace('TF_DATA1',"$str1");

$lay->replace('TF_isresolved',"$isresolved");

$lay->replace('TF_NewComplain',"<a href=newcomplain.php?line=$LineCode&accno=$accno&compid=$id&sms=$smsid>Open New Ticket</a>");

       
    
                       
$lay->display();

exit;	





function parseCurrentDate1($Pdate)
 {
		//$r = Db->ExecuteQuery("select curdate()");
		$r[0]=$Pdate;
		if($Pdate=="")
		{
		$r = mysql_query("select curdate()");
		$r = mysql_fetch_array($r);
		}
		
		
		$DATE =split('-',$r[0]);
		$dd =$DATE[2];
		$mm =$DATE[1];
		$yy =$DATE[0];
		
		
		$TempMONTH=
								"
								<option value=01>Jan</option>
      							<option value=02>Feb</option>
      							<option value=03>Mar</option>
      							<option value=04>Apr</option>
      							<option value=05>May</option>
      							<option value=06>Jun</option>
      							<option value=07>Jul</option>
      							<option value=08>Aug</option>
      							<option value=09>Sep</option>
      							<option value=10>Oct</option>
      							<option value=11>Nov</option>
      							<option value=12>Dec</option>
								";
		
		$TempDAY="
								<option value=01>01</option>
								<option value=02>02</option>
								<option value=03>03</option>
								<option value=04>04</option>
								<option value=05>05</option>
								<option value=06>06</option>
								<option value=07>07</option>
								<option value=08>08</option>
								<option value=09>09</option>
								<option value=10>10</option>
								<option value=11>11</option>
								<option value=12>12</option>
								<option value=13>13</option>
								<option value=14>14</option>
								<option value=15>15</option>
								<option value=16>16</option>
								<option value=17>17</option>
								<option value=18>18</option>
								<option value=19>19</option>
								<option value=20>20</option>
								<option value=21>21</option>
								<option value=22>22</option>
								<option value=23>23</option>
								<option value=24>24</option>
								<option value=25>25</option>
								<option value=26>26</option>
								<option value=27>27</option>
								<option value=28>28</option>
								<option value=29>29</option>
								<option value=30>30</option>
								<option value=31>31</option>
							";
		
		#select replace('<option value=2005 [SP_YEARSEL01]>2005</option><option value=2006 [SP_YEARSEL02]>2006</option>','value=2005','selected value=2005') ;
		
		$TempYEAR=
				   "
				   			<option value=2004>2004</option>	
		            <option value=2005>2005</option>
		            <option value=2006>2006</option>						
		            <option value=2007>2007</option>						
		            <option value=2008>2008</option>						
		            <option value=2009>2009</option>						
		            <option value=2010>2010</option>						
		            ";
		 
		$TempYEAR = str_replace("value=$yy","selected value=$yy",$TempYEAR);
		 
		$TempMONTH = str_replace("value=$mm","selected value=$mm",$TempMONTH);
		 
		$TempDAY = str_replace("value=$dd","selected value=$dd",$TempDAY);
		
	$TEMP[0]=	$TempDAY;
	$TEMP[1]=	$TempMONTH;
	$TEMP[2]= $TempYEAR; 
				 		
   	return $TEMP;
 }	
?>	
