<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$line = $_REQUEST['line'];
$accno = $_REQUEST['accno'];
$list = $_REQUEST['list'];
$cid = $_REQUEST['cid'];
$callid = $_REQUEST['callid'];

$strSQL		= "                                                                 	

update tblincomingcalls
set status=2
where id = '$callid'

";

#print  "\$strSQL : $strSQL";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$callerid				= $_REQUEST['callerphone'];  
$callername     = $_REQUEST['name'];  
$address        = $_REQUEST['address']; 
$city        = $_REQUEST['city']; 

$phone				= $_REQUEST['phone'];  
$cell     = $_REQUEST['cell'];  
$officeno        = $_REQUEST['officeno']; 


 

$heading        = $_REQUEST['subject'];   
$type           = $_REQUEST['type'];      
$message        = $_REQUEST['message'];   
$addressee      = $_REQUEST['addressee']; 
                                          
$product      = $_REQUEST['product']; 


$myArry= array(0,0,0,0,0,0,0,0,0);


foreach ($product as $p) {
#echo $p."<br />";
     $myArry[$p-1] =1;
}

$BinaryProducts="";

for($i=0;$i< sizeof($myArry);$i++)
{
	$BinaryProducts .= $myArry[$i];
	}               
	
#	print "\$BinaryProducts : $BinaryProducts";
#exit;

$monitoring = $_REQUEST['monitoring'];


require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/LogInquiry.htm");



if($message !="")
{
	
	
	$strSQL		= "                                                                 	

insert into tblinquiry 
	(callerid, callername, heading, message, addressee, 
	type, isresolved, category, address, cellno, city, 
	homenum, officenum, dateofact,cid,agent)
	values
	(\"$callerid\", \"$callername\", \"$heading\", \"$message\", \"Operation\", 
	\"Inquiry\", 0, \"$BinaryProducts\", \"$address\", \"$cell\", \"$city\", 
	\"$phone\", \"$officeno\", sysdate(),'$cid' , '" . GetAgentCode($UID) . "')
";

#print  "\$strSQL : $strSQL";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	
	
	
	
	
	
	$lay->replace('TF_MSG',"Message successfully posted.");
	
	
	}








$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_MSG',$err);
$TEMP=parseCurrentDate("");


#print "\$line :$line";
#exit;

$lay->replace('TF_From',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select><input type=hidden name=lineid  value='$line'>");
$lay->replace('TF_To',"<select name=tday>$TEMP[0]</select> - <select name=tmon>$TEMP[1]</select> - <select name=tyear>$TEMP[2]</select>");

$vanid="";
$tSMS="";
$str="";





$lay->replace('TF_Complains',"$NoOfComplains");

$lay->replace('TF_DueAmount',"$DueAmount");

$lay->replace('TF_PhoneNumber',"$line");

$lay->replace('TF_COMP',GetCompaignName($cid));
$lay->replace('TF_COMPID',"$cid"); 


 #print "$str";
 #exit;

 	




       
    
                       
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