


<?php
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

$compid    							=$_REQUEST['compid'];			



if(1)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("../agent/upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      $ranvariable=rand();
      list($name, $type) = split('[/.-]', $_FILES["file"]["type"]);	
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../agent/upload/$compid$ranvariable" . "." . "$type") ;
      echo "Stored in: " . "../agent/upload/$compid$ranvariable" . "." . "$type";
      
      $strSQL="
insert into tbldocs
	( name, compid)
	values
	( '$compid$ranvariable" . "." . "$type', '$compid')
	
	";
 mysql_query("$strSQL")  or die ("Error: ". mysql_error());;


      
      print "<META HTTP-EQUIV=Refresh CONTENT='5; URL={$constant['relpath']}/complainthread.php?id=$compid'> ";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

