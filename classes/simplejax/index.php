<?php

require("./includes/simplejax.class.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<script type="text/javascript" src="./js/ajax_init.js"></script>
</head>
<body onLoad="Start();">

<form name="myform" id="myform" onSubmit="return false();"  >

<script language='javascript'>

var timerID = 0;
var minTimeout = 5;
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
   		clickMe1();	
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
<p><b>Your Name:</b></p>

<p><input type=text name="firstname" id="firstname"></p>

<p><input type=text name="lastname" id="lastname"></p>

<p>         <input type=text name="theTime" size=5 border=0> </p>

<p><input type=button onClick="clickMe();" value="Submit"></p>
<p><input type=button onClick="clickMe1();" value="Submit"></p>

</form>

<div id="mydiv">
Watch here.
</div>

<?php

$simplejax = new SimpleJax("clickMe", "myform", "remote.php", "mydiv");
$simplejax = new SimpleJax("clickMe1", "myform", "remote.php", "mydiv");


?>

</body>
</html>




