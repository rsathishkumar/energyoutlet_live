<script>
window.sessionStorage.setItem("count",0);
window.localStorage.setItem("count",0);</script>
<?php /*?><pre><?php print_r(get_defined_vars()); ?></pre><?php */?>

<?php  $form['submitted']['month']['#options']['']='Month';
$form['submitted']['year']['#options']['']='Year';
$form['submitted']['card_type']['#options']['']='Card Type';
$form['submitted']['rebateid']['#value']=$_SESSION['processid'];

$form['submitted']['credit_card_number']['#attributes']=array('placeholder' => t('Credit card Number'));

$form['submitted']['state']['#attributes']=array('placeholder' => t('State'));
$form['submitted']['zipcode']['#attributes']=array('placeholder' => t('Zipcode'));
$form['submitted']['first_name']['#attributes']=array('placeholder' => t('First Name'));
$form['submitted']['address']['#attributes']=array('placeholder' => t('Address'));
$form['submitted']['payment_city']['#attributes']=array('placeholder' => t('City'));
$form['submitted']['last_name']['#attributes']=array('placeholder' => t('Last Name'));
$form['submitted']['city']['#attributes']=array('placeholder' => t('Cvv'));
?>
<div id="order-left">
<div id="order-summery">

<div id="order-grn">
<div class="order-hd">Order Summary</div>
<div id="order-wht"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="std">Standard Rebate Processing</td>
    <td class="std"><?php echo '$'.$_SESSION['bill'];?></td>
  </tr>
  <tr>
    <td height="230">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="std">TAX</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="std">Total Due:</td>
    <td class="std">&nbsp;<?php echo '$'.$_SESSION['bill'];?></td>
  </tr>
</table>
</div>
</div>
</div>
<div style="margin:0 auto; width:196px;">
</div>
</div>
<div id="ccinfo">
<div id="infom"><table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tr>
    <td colspan="2" class="ccHD">Credit Card Information</td>
    </tr>
  <tr>
    <td colspan="2">
       <?php print drupal_render($form['submitted']['credit_card_number']); ?>   
	  <div class="digtnumber">The 16 digt number on the front of the card</div>	  </td>
    </tr>
  <tr>
    <td>
       
       <?php print drupal_render($form['submitted']['month']); ?>   </td>
    <td>
       <?php print drupal_render($form['submitted']['year']); ?></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><div class="digtnumber">Explration date-only month and year require</div>	</td>
    </tr>
  <tr>
    <td><?php print drupal_render($form['submitted']['card_type']); ?></td>
	</tr><tr>
	<td colspan="2"> <?php print drupal_render($form['submitted']['city']); ?>&nbsp;&nbsp;<img src="<?php echo $base_url;?>/sites/all/themes/energy/images/ccicon.png" width="40" height="24" align="absmiddle"></td>
    
	</tr>
  
</table>
</div>
<div id="baill">
<table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tr>
    <td colspan="3" class="ccHD">Billing Address</td>
  </tr>
  <tr>
    <td colspan="3"><?php print drupal_render($form['submitted']['first_name']); ?></td>
    </tr>
  <tr>
    <td colspan="3"><?php print drupal_render($form['submitted']['last_name']); ?></td>
    </tr>
  <tr>
    <td colspan="3"><?php print drupal_render($form['submitted']['address']); ?></td>
    </tr>
  <tr>
  <?php 
  $form['submitted']['city']['#size']='10';
  $form['submitted']['zipcode']['#size']='10';
$form['submitted']['payment_city']['#size']='10';
$form['submitted']['state']['#size']='10';?>
    <td><?php print drupal_render($form['submitted']['payment_city']); ?></td>
    <td><?php print drupal_render($form['submitted']['state']); ?></td>
    <td><?php print drupal_render($form['submitted']['zipcode']); ?></td>
  </tr>
</table>


</div>
</div>
<?php
print drupal_render_children($form);
?>