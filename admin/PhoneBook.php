<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");

$id    							=$_REQUEST['id'];			
$blck    							=$_REQUEST['blck'];
$flat    							=$_REQUEST['flat'];
$pno    							=$_REQUEST['pno'];
$rank    							=$_REQUEST['rank'];
$name    							=$_REQUEST['name'];
$phn    							=$_REQUEST['phn'];
$location    							=$_REQUEST['location'];
#print "if( ($id !='') && ($blck !=\"\") && ($flat !=\"\")&& ($rank !=\"\")&& ($name !=\"\")&& ($phn !=\"\"))";
if( ($pno !='') && ($blck !="") && ($flat !="")&& ($rank !="")&& ($name !="")&& ($phn !=""))
{

	$strSQL = "
	
	insert into tblphoneinfo 
	( iid, block, flat, pno, rank, name, phone,location)
	values
	( \"$id\", \"$blck\", \"$flat\", \"$pno\", \"$rank\", \"$name\", \"$phn\",\"$location\")
	
	";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/PhoneBook.php'> ";
		exit;
}

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/PhoneBook.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");

$lay->replace('TF_MSG',$err);
$lay->replace('param',"dte=$dte&fday=$fday&fmon=$fmon&fyear=$fyear&tday=$tday&tmon=$tmon&tyear=$tyear&key=$key&compnature=$compnature&status=$status");

$TEMP=parseCurrentDate("");
$lay->replace('TF_From',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select>");
$lay->replace('TF_To',"<select name=tday>$TEMP[0]</select> - <select name=tmon>$TEMP[1]</select> - <select name=tyear>$TEMP[2]</select>");

	$strSQL = "select max(iid) from tblphoneinfo";
	


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$myRow=mysql_fetch_array($QueryResult);
$myRow[0] = intval($myRow[0]) +1;
$lay->replace('TF_IID',$myRow[0]);

$strSQL		= "
select * from tbllocation ";
$locationselect = "<select name='location' >";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
while($myRow=mysql_fetch_array($QueryResult))
{
	$locationselect .= "<option value='" . $myRow['name'] . "'> ". $myRow['name'] ."</option>";
}
$locationselect .= "</select>";


$hash[1]="Test";



	$strSQL = "select * from tblphoneinfo";



$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
	$iid=$myRow['iid'];
	$block=$myRow['block'];
	$flat=$myRow['flat'];
	$pno=$myRow['pno'];
	$rank=$myRow['rank'];
	$name=$myRow['name'];
	$location=$myRow['location'];
	$phone=$myRow['phone'];
	
	$sno++;
$str.="
          <tr>
          <td><span class=\"style14\">$iid</span></td>
            <td><span class=\"style14\">$block</span></td>
            <td><span class=\"style14\">$flat</span></td>
            <td><span class=\"style14\">$pno</span></td>
            <td><span class=\"style14\">$rank</span></td>
           <td><span class=\"style14\">$name</span></td>
           <td><span class=\"style14\">$location</span></td>
           <td><span class=\"style14\">$phone</span></td>             
           <td><span class=\"style14\"><a href=DelPB.php?id=$iid&p=$phone>Delete</a></span></td>
          </tr>

";	


}
$lay->replace('TF_TABLE',$str);
$lay->replace('TF_LOCATIONDD',$locationselect);





$lay->display();

exit;


function parseCurrentDate($Pdate)
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
		            <option value=2010>2010</option>
		            <option value=2011>2011</option>
		            <option value=2012>2012</option>
		            <option value=2013>2013</option>
		            <option value=2014>2014</option>
		            <option value=2015>2015</option>						
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