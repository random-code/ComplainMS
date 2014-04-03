<?php
require('../fpdf.php');

require_once("_constants.php");

require_once("General.php");
include("Authorize.php");


$ffaccno		= $_REQUEST['accno'];
$ffqid			= $_REQUEST['qid'];

$data=array();

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


		$data[$cnt-1][0]=$cnt;
		$data[$cnt-1][1]="$typename($name-$model)";
		$data[$cnt-1][2]="$qty";
		$data[$cnt-1][3]="$price";
		$data[$cnt-1][4]="$cost";


	}


class PDF extends FPDF
{
//Page header
function Header()
{
	//Logo
	$this->Image('logo1.JPG',10,8,33);
	//Arial bold 15
	
	
	$this->SetFont('Arial','BU',15);
	//Move to the right
	$this->Cell(80);
	//Title
	$this->Cell(30,10,'Quotation',0,0,'C');
	$this->SetFont('Arial','',10);
	$this->Cell(100,10,date('dS F Y '),0,0,'C');
	
	//Line break
	$this->Ln(20);
}

//Page footer
function Footer()
{
	//Position at 1.5 cm from bottom
	$this->SetY(-15);
	//Arial italic 8
	$this->SetFont('Arial','I',8);
	//Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


function FancyTable($header,$data)
{
    //Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B',8);
    //Header
    $w=array(10,140,10,18,18);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',1);
    $this->Ln();
    //Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    //Data
    $fill=0;
    foreach($data as $row)
    {
        $this->Cell($w[0],12,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],12,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],12,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],12,number_format($row[3]),'LR',0,'R',$fill);
        $this->Cell($w[4],12,number_format($row[4]),'LR',0,'R',$fill);
        $this->Ln();        	
        $fill=!$fill;
    }
        
    $this->Cell(array_sum($w),0,'','T');
    #$this->Cell(190,0,'','T');
}

}

//Instanciation of inherited class
$pdf=new PDF();
#$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);






$strSQL		= "
select a.*,b.name  cityname from tblcustomer a, tblcity b where accno='$ffaccno' and city =b.id";
#print  $strSQL;
$QueryResult	= mysql_query($strSQL) or die ("[$strSQL]<br>Error: ". mysql_error());
$cnt=0;
	$myRow=mysql_fetch_array($QueryResult) ;

$company	=$myRow['company'];
$accno		=$myRow['accno'];
$name			=$myRow['name'];
$lname		=$myRow['lname'];
$phone		=$myRow['phone'];
$cell		=$myRow['cell'];
$street1	=$myRow['street1'];
$street2	=$myRow['street2'];
$cityname	=$myRow['cityname'];





$pdf->Cell(20,7,"Account No. : $accno",0,0,'L');
$pdf->Cell(40);
$pdf->Cell(20,7,"Company : $company",0,0,'L');
$pdf->ln();

$pdf->Cell(20,7,"Name : $name $lname",0,0,'L');
$pdf->Cell(40);
$pdf->Cell(300,7,"Phone : $phone/$cell",0,0,'L');
$pdf->ln();

$pdf->Cell(20,7,"Address : $street1 $street2 , $cityname",0,0,'L');

$pdf->ln();



$header=array('S. No.','Description','Qty','Rate(PKR.)','Cost(PKR.)');
$pdf->FancyTable($header,$data);

#for($i=1;$i<=40;$i++)
#	$pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
















