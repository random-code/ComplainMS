<?php

#while (list($key,$value) = each($_GET)) {
#
#	$_GET["$key"] = str_replace("zzz", "&", $value);
#		
#}
#
#reset($_GET);
Header('Cache-Control: no-cache');
Header('Pragma: no-cache');      
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];

print("Server Time is $firstname $lastname.". date('H:i:s'));

?>