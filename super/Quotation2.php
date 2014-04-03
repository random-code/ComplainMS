<?php
require_once("_constants.php");

require_once("General.php");
include("Authorize.php");




$ffaccno		= $_REQUEST['accno'];
$ffqid			= $_REQUEST['qid'];

$fftypeid			= $_REQUEST['typeid'];
$ffqty			= $_REQUEST['qty'];


$ffdel			= $_REQUEST['del'];
$ffqdid			= $_REQUEST['qdid'];

$ffconfirm  = $_REQUEST['confirm'];    

if($ffconfirm)
{

$strSQL		= "
update tblqoutation
set maturity=1,cdate=sysdate()
where 
id='$ffqid'
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/QoutationPDF.php?qid=$ffqid&accno=$ffaccno'> ";
exit;

#		require('fpdf.php');
##exit;
#		
#		class PDF extends FPDF
#		{
#		//Page header
#		function Header()
#		{
#		    //Logo
#		    $this->Image('logo1.JPG',10,8,33);
#		    //Arial bold 15
#		    $this->SetFont('Arial','B',15);
#		    //Move to the right
#		    $this->Cell(80);
#		    //Title
#		    $this->Cell(30,10,'Title',1,0,'C');
#		    //Line break
#		    $this->Ln(20);
#		}
#		
#		//Page footer
#		function Footer()
#		{
#		    //Position at 1.5 cm from bottom
#		    $this->SetY(-15);
#		    //Arial italic 8
#		    $this->SetFont('Arial','I',8);
#		    //Page number
#		    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
#		}
#		}
#		
#		//Instanciation of inherited class
#		$pdf=new PDF();
#		$pdf->AliasNbPages();
#		$pdf->AddPage();
#		$pdf->SetFont('Times','',12);
#		
#		$pdf->Output();
#		exit;
#	
	}



require_once ("{$constant['class_path']}/islayout.php");


$data=array();


if($ffdel)
{
	
$strSQL		= "
delete from tblqoutationdetail  where 
id='$ffqdid'
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
	
}



$strSQL		= "
select * from tblqoutation  where 
accno='$ffaccno' and maturity >0
order by id desc 
limit 0,1
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$ffcdate="Never";
if($myRow=mysql_fetch_array($QueryResult))
$ffcdate							=$myRow['cdate'];		

#print "aa:" . $myRow[1][2];
#exit;



if($fftypeid !="")
{


$strSQL		= "
select sellprice from tblinventorytype
where id ='$fftypeid'
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$myRow=mysql_fetch_array($QueryResult);

$sellprice							=$myRow['sellprice'];		



$strSQL		= "


insert into tblqoutationdetail 
	( itemtypeid, qty, price, qoutationid)
	values
	( $fftypeid, $ffqty, $sellprice, $ffqid)


";

#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
	
		print "<META HTTP-EQUIV=Refresh CONTENT='0; URL={$constant['relpath']}/Quotation2.php?qid=$ffqid&accno=$ffaccno'> ";
	}

$lay = new IS_Layout("{$constant['temple_path']}/Quotation2.htm");
$lay->replace('TF_LeftNav',$constant['LeftNavigation']);
$lay->replace('TF_IMAGE_PATH',$constant['images_path']);
$lay->replace('TF_TEMP_PATH',$constant['temple_path']);

$lay->replace('TF_header',$constant['header']);
$lay->replace('TF_lefttitle',"Cpanel");
$lay->replace('TF_LOGO',"<img border='0' src='img001.JPG' width='91' height='108'>");


$lay->replace('TF_AdminName',GetAdminName($AUID));
$lay->replace('TF_MSG',$err);

$tblData="";

if($ffqid =="")
{
$strSQL		= "
insert into tblqoutation
	(cdate, user, maturity,accno)
	values
	(sysdate(), '$AUID', 0,'$ffaccno')
";

#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$strSQL		= "
select max(id) id from tblqoutation
where user ='$AUID'
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());


$myRow=mysql_fetch_array($QueryResult);
$ffqid							=$myRow['id'];		

}
else
{

$strSQL		= "
select a.id qdid,qty,price,b.*,typename from tblqoutationdetail a , 
tblinventorytype b , tblinventorytypetype c where a.itemtypeid =b.id
and b.typeid=c.id
and qoutationid='$ffqid'
";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$cnt=0;
	while($myRow=mysql_fetch_array($QueryResult) )
	{
		$cnt++;
		$id							=$myRow['qdid'];		
		$qty							=$myRow['qty'];		
	$name									=$myRow['name'];		
	$make									=$myRow['make'];		
	$model								=$myRow['model'];	
	$typename							=$myRow['typename'];	
	$sellprice							=$myRow['sellprice'];	
	$price							=$myRow['price'];	
	$cost=	 $price * $qty;
		$tblData.="
		
		
		                 <tr>
                                            <td width=\"69\" ><span class=\"style10\">$cnt</span></td>
                                            <td width=\"195\" ><span class=\"style10\">$typename($name-$model)</span></td>
                                            <td width=\"132\" ><span class=\"style10\">$qty</span></td>
                                            <td width=\"132\" ><span class=\"style10\">$price</span></td>
                                            <td width=\"135\" ><span class=\"style10\">$cost</span></td>
                                             <td width=\"135\" ><span class=\"style10\"><a href=Quotation2.php?accno=$ffaccno&qid=$ffqid&del=1&qdid=$id>Delete</a></span></td>
                                          </tr>
                         
		
		";
		#$data[$cnt-1][0]=$cnt;
		#$data[$cnt-1][1]="$typename($name-$model)";
		#$data[$cnt-1][2]="$qty";
		#$data[$cnt-1][3]="$price";
		#$data[$cnt-1][4]="$cost";
		}
	
	# foreach($data as $row)
	#    {
	#    	print $row[0] ." | "  . $row[1] ." | " . $row[2] ." | " . $row[3] ."\n";                  
	#		}
	}
$strSQL		= "
select a.*,b.name cityname from tblcustomer a , tblcity b
where a.city =b.id
and accno=$ffaccno

";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());

$myRow=mysql_fetch_array($QueryResult);
	$id							=$myRow['id'];		
	$accno							=$myRow['accno'];		
	$company							=$myRow['company'];		
	$name							=$myRow['name'];		
	$lname							=$myRow['lname'];		
	$mname							=$myRow['mname'];		
	$cityname							=$myRow['cityname'];		
	$phone					=$myRow['phone'];
	$cell							=$myRow['cell'];
	$email							=$myRow['email'];	
	$street1							=$myRow['street1'];	
	$street2							=$myRow['street2'];	



$strSQL		= "
select a.id,name,model,make,typename,sellprice from tblinventorytype a , tblinventorytypetype b where a.typeid=b.id ";
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$select="<select name=typeid>";
while($myRow=mysql_fetch_array($QueryResult))
{
	$id										=$myRow['id'];		
	$name									=$myRow['name'];		
	$make									=$myRow['make'];		
	$model								=$myRow['model'];	
	$typename							=$myRow['typename'];	
	$sellprice							=$myRow['sellprice'];	
	$select .= "<option value=$id>$typename($name-$model) - price $sellprice</option>\n";
}

$select.="</select>";

$lay->replace('TF_SELECT',$select . "<input type=hidden name=qid value=$ffqid><input type=hidden name=accno value=$ffaccno>");

$lay->replace('TF_ACCNO1', "<input type=hidden name=qid value=$ffqid><input type=hidden name=accno value=$ffaccno>");
$lay->replace('TF_ACCNO',$ffaccno);
	
$lay->replace('TF_Company',$company);
$lay->replace('TF_ContactName',"$name $mname $lname");
$lay->replace('TF_Contact',"$cell/$phone");
$lay->replace('TF_Address',"$street1<br>street2 - $cityname");



$lay->replace('TF_TBLDATA',$tblData);
$lay->replace('TF_QOUT',"<font color=red>Last qoutation sent on : <b>$ffcdate</b></font>");
	

$lay->display();

exit;		
?>	