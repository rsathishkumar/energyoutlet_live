<style>
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

<?php
$node=node_load($_SESSION['processid']);

$term=taxonomy_term_load($node->field_technology['und'][0]['tid']);
//echo $term->name;
$form['submitted']['processed_rebateid']['#value']=$_SESSION['processid'];
$form['submitted']['processed_rebate']['#value']=$node->title;
echo "<div id='rebate'></div> ";

?>
<script>
$( document ).ready(function() {
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
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step first-disabled disabled"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step disabled"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step current first"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step next"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');

}
else if(count==2)
{
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