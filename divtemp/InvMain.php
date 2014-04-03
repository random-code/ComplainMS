<?php
require_once("_constants.php");
include("Authorize.php");
include("_Db.php");
#require_once("General.php");
#print "$AUID,$UID";
#exit;

$DIVISION = $_SESSION['DIV'];


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
$newitem    							=$_REQUEST['newitem'];
$qty		    							=$_REQUEST['qty'];
$item		    							=$_REQUEST['item'];
$rem		    							=$_REQUEST['rem'];
 #print "\$newitem:$newitem";

if($newitem != "")
{
$strSQL		= "

insert into tblitems
	( itemdesc, dateofact,qty,division)
	values
	( '$newitem', sysdate(),0,'$DIVISION')
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

print "Operation successful , please wait";	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/InvMain.php'> ";
		exit;
}


if($qty != "")
{

$strSQL		= "


insert into `tblitemtrans` 
	( itemcode, dateofact, action, user, remarks, complaincode,qty)
	values
	( '$item', sysdate(), 'IN', '$AUID', '$rem', '',$qty)
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$strSQL		= "


update tblitems
set qty=qty+$qty
where id=$item
";


#print "Operation successful , please wait";

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

print "Operation successful , please wait";
	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/InvMain.php'> ";
		exit;
	
}

require_once ("{$constant['class_path']}/islayout.php");
$lay = new IS_Layout("{$constant['temple_path']}/InvMain.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");

$lay->replace('TF_MSG',$err);
$lay->replace('param',"dte=$dte&fday=$fday&fmon=$fmon&fyear=$fyear&tday=$tday&tmon=$tmon&tyear=$tyear&key=$key&compnature=$compnature");

$TEMP=parseCurrentDate("");
$lay->replace('TF_From',"<select name=fday>$TEMP[0]</select> - <select name=fmon>$TEMP[1]</select> - <select name=fyear>$TEMP[2]</select>");
$lay->replace('TF_To',"<select name=tday>$TEMP[0]</select> - <select name=tmon>$TEMP[1]</select> - <select name=tyear>$TEMP[2]</select>");
$lay->replace('TF_DIV',$DIVISION);

$hash[1]="Test";



//my code
$strSQL		= "

select * from tblitems
";


#print $strSQL;

$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="<select name=item>";

while($myRow=mysql_fetch_array($QueryResult))
{
	
#print $cnt;
$cnt++;
$id=$myRow['id'];
$itemdesc=$myRow['itemdesc'];

$str.="<option value=$id>$itemdesc</option>";
}

$str.="</select>";

$lay->replace('TF_ITEM',$str);





if($fday !="")
{
$strSQL = "select complaincode,b.itemdesc,a.dateofact,action,user,remarks,a.qty,itemcode from tblitemtrans a, tblitems b where b.id=itemcode and division='$DIVISION' and";
#if($dte!="")
{
	$strSQL .= " ( a.dateofact >= '$fyear-$fmon-$fday 00:00:00' and a.dateofact <= '$tyear-$tmon-$tday 23:59:59') order by a.dateofact";
	
}

#$compnature

#print "\$strSQL:$strSQL";


$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$str="";
$sno=0;
while($myRow=mysql_fetch_array($QueryResult))
{
	$itemdesc=$myRow['itemdesc'];
	$dateofact=$myRow['dateofact'];
	$action=$myRow['action'];
	$user=$myRow['user'];
	$remarks=$myRow['remarks'];
	$qty=$myRow['qty'];
	$complaincode=$myRow['complaincode'];
	#print "\$complaincode:$complaincode";
	if($complaincode==0) $complaincode="";
	
	$bgcolor="bgcolor=#99FF66";
	if($action =="OUT")
	$bgcolor="bgcolor=#FDC1D3";
	
	
	
		$sno++;
$str.="
          <tr $bgcolor>
          <td><span class=\"style14\">$sno</span></td>
            <td><span class=\"style14\">$itemdesc</span></td>
            <td><span class=\"style14\">$dateofact</span></td>
            <td><span class=\"style14\">$qty</span></td>
            <td><span class=\"style14\">$action</span></td>
            <td><span class=\"style14\">$user</span></td>
            <td><span class=\"style14\">$remarks</span></td>
                        <td><span class=\"style14\"><a href=complainthread.php?id=$complaincode>$complaincode</a></span></td>
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