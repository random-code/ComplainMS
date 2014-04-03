<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");

$dte    							=$_REQUEST['dte'];			
$fday    							=$_REQUEST['fday'];
$fmon    							=$_REQUEST['fmon'];
$fyear    							=$_REQUEST['fyear'];
$tday    							=$_REQUEST['tday'];
$tmon    							=$_REQUEST['tmon'];
$tyear    							=$_REQUEST['tyear'];
$key    							=$_REQUEST['key'];
$compnature    							=$_REQUEST['compnature'];
$summary    							=$_REQUEST['summary'];
$status    							=$_REQUEST['status'];


if($summary ==1)
{
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/complainsummary.php?fdate=$fyear-$fmon-$fday&tdate=$tyear-$tmon-$tday'> ";
		exit;
}

if($compnature==1)
{
	$compnature1="Electric/water/gas";
		
	}
elseif($compnature==2) 
{
	$compnature1="Buliding/road";
		
	}
elseif($compnature==3) 
{
	$compnature1="Furniture";
		
	}		
else
{
	$compnature1="All";
	}	
require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/complainmain1print.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");

$lay->replace('TF_MSG',$err);
$lay->replace('TF_DIV',$compnature1);
$lay->replace('param',"dte=$dte&fday=$fday&fmon=$fmon&fyear=$fyear&tday=$tday&tmon=$tmon&tyear=$tyear&key=$key&compnature=$compnature");

$TEMP=parseCurrentDate("");
$lay->replace('TF_From',"$fyear-$fmon-$fday");
$lay->replace('TF_To',"$tyear-$tmon-$tday");


$hash[1]="Test";



//my code
$strSQL		= "

select * from tblcomplaintype
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=compnature>";
$str.="<option value=''>All</option>";
while($myRow=mysql_fetch_array($QueryResult))
{
	
#print $cnt;
$cnt++;
$id=$myRow['id'];
$heading=$myRow['complaintype'];
$hash[$id]=$heading;
if($id==$compnature)
{
	$str.="<option value=$id selected>$heading</option>";
}
else
$str.="<option value=$id>$heading</option>";
}

$str.="</select>";

$lay->replace('TF_ComplainNature',$str);





if($fday !="")
{
$strSQL = "select * from tblcomplain where";
if($dte!="")
{
	$strSQL .= " ( dte >= '$fyear-$fmon-$fday 00:00:00' and dte <= '$tyear-$tmon-$tday 23:59:59') ";
	
}
else
{
	$strSQL .= " 1=1 ";
}
if($key!="")
{
$strSQL .= " and (acc like '%$key%' or phn like '%$key%' or compid like '%$key%' or name like '%$key%') ";
}
if($status !="")
{
$strSQL .= " and (status in ($status) )";
}

if($compnature !="")
{
	$strSQL .= " and compnature='$compnature'";
}

#$compnature

#print "\$strSQL:$strSQL";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
	$compid=$myRow['compid'];
	$compnature1=$myRow['compnature'];
	$status=$myRow['status'];
	$text=$myRow['text'];
	$dte=$myRow['dte'];
	$name=$myRow['name'];
	$acc=$myRow['acc'];
	#$text=$myRow['text'];
	
	if($status)
	$status="Resolved";
	else
	$status="Pending";
	
	$compnature1=$hash[$compnature1];
	$sno++;
$str.="
          <tr>
          <td><div align=center><div align=center class=style85>$sno</a></div></div></td>
            <td><div align=center><div align=center class=style85>$compid</a></div></div></td>
            <td><div align=center><div align=center class=style85>$dte</div></div></td>
            <td><div align=left><div align=left class=style85>$name</div></div></td>
            <td><div align=left><div align=left class=style85>$acc</div></div></td>
            <td><div align=left><div align=left class=style85>$text</div></div></td>
            <td><div align=left><div align=left class=style85>$status</div></div></td>
          </tr>

";	


}
$lay->replace('TF_TABLE',$str);


}
else
$lay->replace('TF_TABLE',"");







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