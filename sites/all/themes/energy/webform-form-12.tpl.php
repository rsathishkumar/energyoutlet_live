<style>
#edit-submitted-contractor-information-company-name
{
width:150px;
color:black;
font-size:12px;
line-height:24px;
width:160px;

border:solid 1px #fff;
padding:2px 6px;
/* Safari 3-4, iOS 1-3.2, Android 1.6- */
  -webkit-border-radius: 6px; 

  /* Firefox 1-3.6 */
  -moz-border-radius: 6px; 
  
  /* Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ */
  border-radius: 6px;
     -moz-box-shadow:   0px 1px 5px #ccc inset0;
   -webkit-box-shadow: 0px 1px 5px #ccc inset;
   box-shadow:         0px 1px 5px #ccc inset;

}
.with-tabs
{
margin: -20px 0px 46px 0px;
}
#edit-webform-steps
{
top:200px;
}
.tabledrag-toggle-weight-wrapper
{
display:none;
}
#edit-submitted-documents--2-table th
{
display:none;
}


.webform-component-textarea .grippie{
display:none;}
.webform-page{
background: #002A5C;
padding: 4px;
color: #FFFFFF;
font-size: 13px;
font-weight: bold;
}</style>
<div id="check"><input type="checkbox" id="profile" name="profile" />Contractor information is same as Profile Information</div>
<?php
//echo $_COOKIE['processid'].'----'.$_COOKIE['bill'];
$_SESSION['processid']=$_COOKIE['processid'];
$_SESSION['bill']=$_COOKIE['bill'];
$_SESSION['rebatetitle']='';
$node=node_load($_COOKIE['processid']);
$_SESSION['bill']=$node->field_bill_amount['und'][0]['value'];
$_SESSION['rebatetitle']=$node->title;
//echo $_SESSION['processid'].'===sess=='.$_SESSION['rebatetitle'].'+++ses+++'.$_SESSION['bill'].'<br/>';

$term=taxonomy_term_load($node->field_technology['und'][0]['tid']);
//echo $term->name;
$form['submitted']['processed_rebateid']['#value']=$_SESSION['processid'];
$form['submitted']['processed_rebate']['#value']=$node->title;
echo "<div id='rebate'></div> ";
global $user;
$u=user_load($user->uid);
$name=$u->field_first_name['und'][0]['value'];
$mail=$u->mail;
$address=$u->field_address['und'][0]['value'];
$city=$u->field_city['und'][0]['value'];
$state=$u->field_states['und'][0]['value'];
$zipcode=$u->field_zipcode['und'][0]['value'];
$company=$u->field_company_name['und'][0]['value'];
?>
<script>
$( document ).ready(function() {

if(window.sessionStorage.getItem("check")==1)
{
$('#profile').prop('checked', true);
}

$('#profile').change(function() {
  if ($(this).is(':checked')) {
  window.sessionStorage.setItem("check",1);
    console.log('Checked');
   $('#edit-submitted-contractor-information-contractors-information').val('<?php echo $name;?>');
	$('#edit-submitted-contractor-information-contractor-adress').val('<?php echo $address;?>');
	$('#edit-submitted-contractor-information-contractor-city').val('<?php echo $city;?>');
	$('#edit-submitted-contractor-information-contractor-state').val('<?php echo $state;?>');
	$('#edit-submitted-contractor-information-contractor-zip-code').val('<?php echo $zipcode;?>');
	$('edit-submitted-contractor-information-contractor-phone').val('<?php echo $phone;?>');
	$('#edit-submitted-contractor-information-contractor-email').val('<?php echo $mail;?>');
  $('#edit-submitted-contractor-information-contractor-company-name').val('<?php echo $company;?>');
	
  } else {
   window.sessionStorage.setItem("check",0);
    $('#edit-submitted-contractor-information-contractors-information').val('');
	$('#edit-submitted-contractor-information-contractor-adress').val('');
	$('#edit-submitted-contractor-information-contractor-city').val('');
	$('#edit-submitted-contractor-information-contractor-state').val('');
	$('#edit-submitted-contractor-information-contractor-zip-code').val('');
	$('edit-submitted-contractor-information-contractor-phone').val('');
	$('#edit-submitted-contractor-information-contractor-email').val('');
	
  }
}); 

$("#edit-submitted-type-of-rebate").trigger("change");
$("#edit-submitted-type-of-rebate").val("<?php echo $term->name;?>");
$(":input#edit-submitted-type-of-rebate").trigger('change');
$('.webform-component--type-of-rebate').hide();  
});
</script>
<input type="hidden" id="hiddenrebate" value='<?php echo $node->title;?>'/>

<input type="hidden" id="hiddendes" value='<?php echo $node->body['und'][0]['value'];?>'/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$( document ).ready(function() {

if (window.sessionStorage) {
        //    alert("We have session storage!");
       
$( ".webform-next" ).click(function() {
  var count=window.sessionStorage.getItem("count");
  count++;
  window.sessionStorage.setItem("count",count);
});
$( ".webform-previous" ).click(function() {
  var count=sessionStorage.getItem("count");
  count--;
  window.sessionStorage.setItem("count",count);
});
 var count=window.sessionStorage.getItem("count");
// alert(count);
if(count==0)
{
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step current first"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step next"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step disabled"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');
}
else if(count==1)
{
$('#check').hide();
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step disabled"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step current first"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step next"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');

}
else if(count==2)
{
$('#check').hide();
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step disabled"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step disabled"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step current last"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');
var title=document.getElementById('hiddenrebate').value;
var description=document.getElementById('hiddendes').value;
$('#rebate').html('<h2 class="webform-page">Selected Rebate</h2><div class="rebateselected-sub"><table width="100%" border="0" cellspacing="0" cellpadding="10"><tbody><tr><td><b>'+title+'</b></td></tr><tr><td>'+description+'</td></tr></tbody></table></div>');
$( '<h2 class="webform-page">Site And Contractor Information</h2>' ).insertBefore( ".webform-component--siteinformation" );
$('.webform-component--project-information').css('background-color','none');

$('.webform-page').each(function(el){
if($(this).text()=='Project Summary')
{
	$(this).css('display','none');
}
});

}
else
{

$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step current first"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step next"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step disabled"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');


}

        }
 
/*       
$( ".webform-next" ).click(function() {
  var count=window.localStorage.getItem("count");
  count++;
  window.localStorage.setItem("count",count);
});
$( ".webform-previous" ).click(function() {
  var count=localStorage.getItem("count");
  count--;
  window.localStorage.setItem("count",count);
});
 var count=window.localStorage.getItem("count");
alert(count);
if(count==0)
{
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step current first"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step next"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step disabled"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');
}
if(count==1)
{
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step disabled"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step current first"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step next"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');

}
if(count==2)
{
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step disabled"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step disabled"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step current last"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');
var title=document.getElementById('hiddenrebate').value;
var description=document.getElementById('hiddendes').value;
$('#rebate').html('<h2 class="webform-page">Selected Rebate</h2><div class="rebateselected-sub"><table width="100%" border="0" cellspacing="0" cellpadding="10"><tbody><tr><td><b>'+title+'</b></td></tr><tr><td>'+description+'</td></tr></tbody></table></div>');
$( '<h2 class="webform-page">Site And Contractor Information</h2>' ).insertBefore( ".webform-component--siteinformation" );
$('.webform-component--project-information').css('background-color','none');
alert($('.webform-page').text());
if($('.webform-page').text()=='Project Summary')
{
$('.webform-page').hide();
}
}

    console.log( "ready!" );
	/*
$('.webform-component--processed-rebate').html('<div class="rebateselected"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left">Rebate Selected</td></tr></table></div><div class="rebateselected-sub"><table width="100%" border="0" cellspacing="0" cellpadding="10"><tr><td><?php echo $node->title;?></td></tr><tr><td>02</td></tr><tr><td>02</td></tr></table></div><div class="rebateselected"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left">Site and Contractor Information</td><td align="right"> <input name="" type="button" class="edit_btn" value="Edit Site Information"></td></tr></table></div>');
*/
});

</script>
<?php 

print drupal_render_children($form);
?>