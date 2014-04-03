<?php

//ajax_fetch_customer_id_or_name.php
function get_ajax_header($file_name)
{

$ajax_header ="
<script type=\"text/javascript\" src=\"/cms/classes/prototype.js\"></script>
<script>
			function sendRequest_form_ajax() {
				new Ajax.Request(\"".$file_name."\", 
					{ 
					method: 'post', 
					postBody: 'txt_value='+ form_ajax.document.getElementById('txt_value').value,
					onComplete: showResponse 
					});
				}
								
			function showResponse(req){
				$('show').innerHTML= req.responseText;
			}
</script>";
return $ajax_header;
}
#postBody: 'txt_value='+ $F('txt_value'),
function get_ajax_form($title)
{
	if($title==""){$title="Form_ajax";}
$ajax_form="
<form name ='form_ajax' id ='form_ajax' onsubmit='return false;'>
					
<div ms_positioning='LinearLayout'>
<table height='52' cellspacing='0' cellpadding='0' width='246' border='1' ms_1d_layout='TRUE'>
  <tr>
    <td><font face=Verdana size=1>".$title.":</font>
      <table height='33' cellspacing='1' cellpadding='1' width='242' border='1'>
        <tr>
          <td><font face=Verdana size=1>No/Name:</font></td>
          <td><input id='txt_value' type='text' size='12' name='txt_value' title='Customer No or Customer Name'>
          <input id='Submit1' onclick=sendRequest_form_ajax() type='submit' value='submit'>
          </td>
		</tr>
		</table></td></tr></table>
  </div>    
  		<div id='show'></div>
</form>
";

return $ajax_form;
}

//ajax_check_assigned_region_to_customer.php
function get_ajax_header_check($file_name)
{

$ajax_header ="
<script type=\"text/javascript\" src=\"/cms/classes/prototype.js\"></script>
<script>
			function sendRequest_form_ajax_check() {
				new Ajax.Request(\"".$file_name."\", 
					{ 
					method: 'post', 
					postBody: 'txt_value1='+ form_ajax_check.document.getElementById('txt_value1').value +
										'&txt_value2='+ form_ajax_check.document.getElementById('txt_value2').value +
										'&ckb_value3='+ form_ajax_check.document.getElementById('ckb_value3').checked ,
					onComplete: showResponse_check
					});
				}
								
			function showResponse_check(req){
				$('show').innerHTML= req.responseText;
			}
</script>";
return $ajax_header;
}

function get_ajax_form_check($title)
{
	if($title==""){$title="form_ajax_check";}
$ajax_form="
<form name ='form_ajax_check' id ='form_ajax_check' onsubmit='return false;'>
					
<div ms_positioning='LinearLayout'>
<table height='52' cellspacing='0' cellpadding='0' width='246' border='1' ms_1d_layout='TRUE'>
  <tr>
    <td><font face=Verdana size=1>".$title.":</font>
      <table height='33' cellspacing='1' cellpadding='1' width='242' border='1'>
        <tr>
          <td><font face=Verdana size=1>No/Name:</font></td>
          <td><input id='txt_value1' type='text' size='12' name='txt_value1' title='No=Customer ID or Name=Customer Name'></td>
				</tr>
				<tr>
          <td><font face=Verdana size=1>Dial Code:</font></td>
          <td><input id='txt_value2' type='text' size='12' name='txt_value2'></td>
				</tr>
				<tr>
          <td><font face=Verdana size=1>Type:</font></td>
          <td>
          <input id='ckb_value3' type='checkbox' name='ckb_value3' title='Customer=Unchecked or Vendor=Checked' value='1'>
          <input id='Submit22' onclick=sendRequest_form_ajax_check() type='submit' value='submit'>
          </td>
				</tr>
		</table></td></tr></table>
  </div>    
  		<div id='show'></div>
</form>
";

return $ajax_form;
}

imran
?>
