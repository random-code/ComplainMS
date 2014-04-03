<?php $this->load->view("partial/header"); ?>


 
<?php
if(isset($error))
{
	echo "<div class='error_message'>".$error."</div>";
}
?>

	
<div id="register_container" class="receiving">
<div id='TB_load'><img src="<?php echo base_url().'images/loading_animation.gif';?>" ></div>
<table>
<tbody>
	<tr>
		<td id="register_items_container">
			<table id="title_section">
				<tbody>
				<tr>
					<td id="title_icon">
						<img src="<?php echo base_url().'images/menubar/receivings.png';?>" >
					</td>
					<td id="title" style="position:relative"><?php echo $this->lang->line('recvs_register'); ?></td>
					<td id="register_wrapper">
                    <?php echo form_open("receivings/change_mode",array('id'=>'mode_form')); ?>
		             <span><?php echo $this->lang->line('recvs_mode') ?></span>
					 <?php echo form_dropdown('mode',$modes,$mode,'onchange="$(\'#mode_form\').submit();"'); ?></form>

					</td>
				</tr>
			</tbody>
			</table>
	


<div id="reg_item_search">
<?php echo form_open("receivings/add",array('id'=>'add_item_form')); ?>	
<?php echo form_input(array('class'=>'ui-autocomplete-input','value'=>'','name'=>'item','id'=>'item','type'=>'text','size'=>'30','autocomplete'=>'off','role'=>'textbox','aria-autocomplete'=>'list','aria-haspopup'=>'true'));?>

<div id="new_item_button_register" >
<?php echo anchor("items/view/-1/width~550",
"<div style='background-image:none' class='small_button'><span>".$this->lang->line('sales_new_item')."</span></div>",
array('class'=>'thickbox none','title'=>$this->lang->line('sales_new_item')));
		?>
</div>
</form>
</div>
			<div id="register_holder">
			<table id="register">
				<thead>
					<tr>
						<th id="reg_item_del"></th>
						<th id="reg_item_name">Item Name</th>
						<th id="reg_item_price">Cost</th>
						<th id="reg_item_qty">Qty.</th>
						<th id="reg_item_discount">Disc %</th>
						<th id="reg_item_total">Total</th>
					</tr>
				</thead>


<tbody id="cart_contents">
					
<?php
if(count($cart)==0)
{
?>
<tr>
	<td colspan='6'>
<div class='warning_message' style='padding:7px;'><?php echo $this->lang->line('sales_no_items_in_cart'); ?></div>
</tr></tr>
<?php
}
else
{
	foreach(array_reverse($cart, true) as $line=>$item)
	{
		echo form_open("receivings/edit_item/$line");
	?>
		
		<tr id="reg_item_top">
			
		<td id='reg_item_del' style='width: 93px;' ><?php echo anchor("receivings/delete_item/$line",'['.$this->lang->line('common_delete').']');?></td>

		<td style="align:center;"><?php echo $item['name']; ?></td>

		


		<?php if ($items_module_allowed)
		{
		?>
			<td id='reg_item_price' style='width: 139px;border:none;'><?php echo form_input(array('name'=>'price','value'=>$item['price'],'size'=>'6'));?></td>
		<?php
		}
		else
		{
		?>
			<td><?php echo $item['price']; ?></td>
			<?php echo form_hidden('price',$item['price']); ?>
		<?php
		}
		?>
		<td id='reg_item_qty' style= 'width: 154px;'>
		<?php
        	echo form_input(array('name'=>'quantity','value'=>$item['quantity'],'size'=>'2'));
		?>
		</td>


		<td id='reg_item_discount' style='width: 93px;'><?php echo form_input(array('name'=>'discount','value'=>$item['discount'],'size'=>'3'));?></td>
		<td id='reg_item_total' style='width: 154px; text-align:center'><?php echo to_currency($item['price']*$item['quantity']-$item['price']*$item['quantity']*$item['discount']/100); ?></td>
		
		</tr >

		<tr id="reg_item_bottom">
						<td id="reg_item_descrip_label">Desc:</td>
						<td id="reg_item_descrip" colspan="5">
					
<?php
			echo $item['description'];
      		echo form_hidden('description',$item['description']);
		?>
						</td>
					</tr>	
		
		</td>

		</tr>
		</form>
	<?php
	}
}
?>
				</tbody>
			</table>
			</div>
			<div id="reg_item_base"></div>
		</td>
		<td style="width:8px;"></td>



		<td id="over_all_sale_container">
			

		<div id="overall_sale">

			    <?php echo form_open("receivings/cancel_receiving",array('id'=>'cancel_sale_form')); ?>
			    <div class='small_button' id='cancel_sale_button'>
			    <span>Cancel Recv </span>
				</div>
                </form> 


	            <div id="customer_info_shell">
				<div id='customer_info_empty'>
                <?php
		if(isset($supplier))
	{
		echo $this->lang->line("recvs_supplier").': <b>'.$supplier. '</b><br />';
		echo anchor("receivings/delete_supplier",'['.$this->lang->line('common_delete').' '.$this->lang->line('suppliers_supplier').']');
	}
	else
	{
		echo form_open("receivings/select_supplier",array('id'=>'select_supplier_form')); ?>
		<label id="customer_label" for="supplier"><?php echo $this->lang->line('recvs_select_supplier'); ?></label>
		<?php echo form_input(array('name'=>'supplier','id'=>'supplier','size'=>'30','value'=>$this->lang->line('recvs_start_typing_supplier_name')));?>
		</form>
		<div style="margin-top:5px;text-align:center;">
		<h3 style="margin: 5px 0 5px 0"><?php echo $this->lang->line('common_or'); ?></h3>
		<?php echo anchor("suppliers/view/-1/width:550",
		"<div class='small_button' style='margin:0 auto;'><span>".$this->lang->line('recvs_new_supplier')."</span></div>",
		array('class'=>'thickbox none','title'=>$this->lang->line('recvs_new_supplier')));
		?>
		</div>
		<div class="clearfix">&nbsp;</div>
		<?php
	}
	?>   
				</div>
				</div>
			
				<div id="sale_details">
                <table id="sales_items_total">
                <tbody>
                <tr>
                <td class="float_left" style='width:55%;'><?php echo $this->lang->line('sales_total'); ?>:</td>
                <td class="float_left" style="width:45%;font-weight:bold;"><?php echo to_currency($total); ?></td>
                </tr>
                </tbody>
                </table>
                </div>


 <div id="finish_sale">
<?php echo form_open("receivings/complete",array('id'=>'finish_sale_form')); ?>
<div id="make_payment">
<table id="make_payment_table">
<tbody>
<tr id="mpt_top">
<td>
		<?php
		    echo form_dropdown('payment_type',$payment_options);?>
</select>
</td>
</tr>
<tr id="mpt_bottom">
<td id="tender" colspan="2">
<?php
echo form_input(array('name'=>'amount_tendered','value'=>'','size'=>'10'));
?>
</td>
</tr>
</tbody>
</table>
</div>
<label id="comment_label" for="comment"><?php echo $this->lang->line('common_comments'); ?>:</label>
<?php echo form_textarea(array('name'=>'comment','value'=>'','rows'=>'4','cols'=>'40'));?>
<?php echo "<div class='small_button' id='finish_sale_button' style='float:right;margin-top:5px;'><span>".$this->lang->line('recvs_complete_receiving')."</span></div>";
		?>
<span>Finish</span>
</div>
</form>








</div>
			</div><!-- END OVERALL-->		
		</td>
	</tr>
</tbody>
</table>
<div id="feedback_bar"></div>

<script type="text/javascript">
</script>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	var my_ar = new Array ("reg_item_total","reg_item_discount", "reg_item_qty", "reg_item_price", "reg_item_stock", "reg_item_number", "reg_item_name", "reg_item_del"); 				
	for (i=0; i < my_ar.length; i++ ) 
	{					
		my_th = $("th#" + my_ar[i]);
		my_td = $("td#" + my_ar[i]);						
		my_td.each(function (i)
		{
			$(this).width(my_th.width());					
		});
	};
	
	$('a.thickbox, area.thickbox, input.thickbox').each(function(i) 
	{
		$(this).unbind('click');
    });
 	
	tb_init('a.thickbox, area.thickbox, input.thickbox');
	
	$('#add_item_form, #mode_form, #select_supplier_form').ajaxForm({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
	
	$( "#item" ).autocomplete({
		source: 'https://demo.phppointofsale.com/index.php/receivings/item_search',
		delay: 10,
		autoFocus: false,
		minLength: 0,
		select: function(event, ui)
		{
 			event.preventDefault();
 			$( "#item" ).val(ui.item.value);
			$('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
		},
		change: function(event, ui)
		{
			if ($(this).attr('value') != '' && $(this).attr('value') != "Type item name or scan barcode...")
			{
				$("#add_item_form").ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
			}
	
    		$(this).attr('value',"Type item name or scan barcode...");
		}
	});
	
	$("#cart_contents input").change(function()
	{
		var toFocusId = $(":input[type!=hidden]:eq("+($(":input[type!=hidden]").index(this) + 1) +")").attr('id');
		$(this.form).ajaxSubmit({target: "#register_container",beforeSubmit: receivingsBeforeSubmit, success: function()
		{
			receivingsSuccess();
			setTimeout(function(){$('#' + toFocusId).focus();}, 10);
			
		}
		});
	});
	
	setTimeout(function(){$('#item').focus();}, 10);
	
	$('#item,#supplier').click(function()
    {
    	$(this).attr('value','');
    });

	$('#mode').change(function()
	{
		$('#mode_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
	});

	$( "#supplier" ).autocomplete({
		source: 'https://demo.phppointofsale.com/index.php/receivings/supplier_search',
		delay: 10,
		autoFocus: false,
		minLength: 0,
		select: function(event, ui)
		{
			$( "#supplier" ).val(ui.item.value);
			$('#select_supplier_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});			
		}
	});

    $('#supplier').blur(function()
    {
    	$(this).attr('value',"Type supplier's name...");
    });

    $("#finish_sale_button").click(function()
    {
    	if (confirm("Are you sure you want to submit this receiving? This cannot be undone."))
    	{
    		$('#finish_sale_form').submit();
    	}
    });

    $("#cancel_sale_button").click(function()
    {
    	if (confirm("Are you sure you want to clear this receiving? All items will cleared."))
    	{
			$('#cancel_sale_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
    	}
    });

	$('.delete_item, #delete_supplier').click(function(event)
	{
		event.preventDefault();
		$("#register_container").load($(this).attr('href'));	
	});

});


function post_item_form_submit(response)
{
	if(response.success)
	{
		$("#item").attr("value",response.item_id);
		$('#add_item_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
	}
}

function post_person_form_submit(response)
{
	if(response.success)
	{
		$("#supplier").attr("value",response.person_id);
		$('#select_supplier_form').ajaxSubmit({target: "#register_container", beforeSubmit: receivingsBeforeSubmit, success: receivingsSuccess});
	}
}

function receivingsBeforeSubmit(formData, jqForm, options)
{
	$("#finish_sale_button").hide();
	$("#TB_load").show();	
}

function receivingsSuccess(responseText, statusText, xhr, $form)
{
}

</script></div>
</div>
</div>
	
	<table id="footer_info">
		<tr>
			<td id="menubar_footer">
			Welcome <b> John Doe! | </b>			<a href="https://demo.phppointofsale.com/index.php/home/logout">Logout</a>			</td>
	
			<td id="menubar_date_time" class="menu_date">
				01:50			</td>
			<td id="menubar_date_day" class="menu_date mini_date">
				Wed	
				<br />
				am			</td>
			<td id="menubar_date_spacer" class="menu_date">
				|
			</td>
			<td id="menubar_date_date" class="menu_date">
				19			</td>
			<td id="menubar_date_monthyr" class="menu_date mini_date">
				February				<br />
				2014			</td>
		</tr>
	</table>
	
	<?php $this->load->view("partial/footer"); ?></body>
</html>