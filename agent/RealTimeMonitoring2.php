<?
require_once("_constants.php");
include("Authorize.php");
require_once("General.php");

require("{$constant['class_path']}/simplejax/includes/simplejax.class.php");

$city		= $_GET['city'];
$sector		= $_GET['sector'];
$rtime		= $_GET['rtime'];
$sectorbr="";
foreach ($sector as $s) {
#echo $s."<br />";
$sectorbr .="$s ,";
}

#print strlen($sectorbr)-1;
#exit;
$sectorbr=substr($sectorbr,0,strlen($sectorbr)-1);
#print $sectorbr;
#exit;
print "<script type=\"text/javascript\" src=\"{$constant['class_path']}/simplejax/js/ajax_init.js\"></script>";
?>



</head>
<body onLoad="Start();">

<form name="myform" id="myform" onSubmit="return false();"  >

<script language='javascript'>

var timerID = 0;
var minTimeout = <? echo $rtime; ?>;
var tStart  = null;

function UpdateTimer() {
   if(timerID) {
      clearTimeout(timerID);
      clockID  = 0;
   }

   if(!tStart)
      tStart   = new Date();

   var   tDate = new Date();
   var   tDiff = tDate.getTime() - tStart.getTime();

   tDate.setTime(tDiff);

   document.myform.theTime.value = "" 
                                   + tDate.getMinutes() + ":" 
                                   + tDate.getSeconds();
   var TotalSeconds=tDate.getMinutes() * 60   +  tDate.getSeconds()
   		if(TotalSeconds >=minTimeout)
   		{
   		clickMe();	
   		//return;
   		Start();
   		}
   timerID = setTimeout("UpdateTimer()", 1000);
}

function Start() {
   tStart   = new Date();

   document.myform.theTime.value = "00:00";

   timerID  = setTimeout("UpdateTimer()", 1000);

}




	
</script>	
<p><b>Real Time Monitoring</b></p>

<input type=hidden name="city" value='<? echo $city; ?>'></p>

<input type=hidden name="sectorbr" value='<? echo $sectorbr; ?>'>

Refreshing in  <? echo $rtime; ?> seconds , Seconds till last refresh <input type=text name="theTime" size=5 border=0>  

<input type=button onClick="clickMe();" value="Refresh Manually">


</form>

<div id="mydiv">
Watch here.
</div>

<?php

$simplejax = new SimpleJax("clickMe", "myform", "remote2.php", "mydiv");

?>

</body>
</html>



