<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");

$DIVISION = $_SESSION['DIV'];


$id    							=$_REQUEST['id'];			
$anum    							=$_REQUEST['anum'];
$name    							=$_REQUEST['name'];
$designation    							=$_REQUEST['designation'];
$remarks    							=$_REQUEST['remarks'];

#print "if( ($id !='') && ($blck !=\"\") && ($flat !=\"\")&& ($rank !=\"\")&& ($name !=\"\")&& ($phn !=\"\"))";
if( ($anum !='') && ($name !="") && ($designation !=""))
{

	$strSQL = "
	
	insert into tblemployees 
	( anumber, name, designation, division ,remarks)
	values
	( \"$anum\", \"$name\", \"$designation\", \"$DIVISION\", \"$remarks\")
	
	";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/Employees.php'> ";
		exit;
}

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/Employees.htm");
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


$hash[1]="Test";



	$strSQL = "select * from tblemployees where division='$DIVISION'";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
$sno++;
	$iid=$myRow['id'];
	$anumber=$myRow['anumber'];
	$name=$myRow['name'];
	$designation=$myRow['designation'];
	$division=$myRow['division'];
	$enable=$myRow['enable'];
	$remarks=$myRow['remarks'];
	
	#$sno++;
$str.="
          <tr>
          <td><span class=\"style14\">$sno</span></td>
            <td><span class=\"style14\">$name</span></td>
            <td><span class=\"style14\">$designation</span></td>
            <td><span class=\"style14\">$anumber</span></td>
            <td><span class=\"style14\">$division</span></td>
					 <td><span class=\"style14\">$remarks</span></td>                   

";	

if($enable)
{

$str.="
					<td><span class=\"style14\">Enabled</span></td>
           <td><span class=\"style14\"><a href=EdEM.php?id=$iid&enable=0>Edit</a></span></td>

          </tr>";

}
else
{

$str.="			
					<td><span class=\"style14\">Disabled</span></td>	
           <td><span class=\"style14\"><a href=EdEM.php?id=$iid&enable=1>Edit</a></span></td>

          </tr>";


}


}
$lay->replace('TF_TABLE',$str);






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