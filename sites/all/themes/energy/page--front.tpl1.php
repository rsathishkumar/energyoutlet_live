<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Energy Outlet</title>

<link href="<?php print base_path() . path_to_theme() ?>/css/energyoutlet.css" rel="stylesheet" type="text/css">
<!-------------------------tabs---------------------------->
<script src="<?php print base_path() . path_to_theme() ?>/js/jquery-1.7.2.min.js"></script>
<style>
.simplenews-block-form-2 .form-submit
{
font-weight: bold;
margin: 0px;
padding: 0px;
background: none;
border: solid 0px red;
color: #131575;
text-transform: uppercase;
font-family: "Arial Narrow";
font-size: 14px;

}
</style>
<script>
$(document).ready(function() {
$('#edit-name').attr('size',20);
$('#edit-pass').attr('size',20);
$('label[for=edit-name]').remove();
$('label[for=edit-mail]').remove();
$('label[for=edit-pass]').remove();
$( ".content li" ).each(function( index ) {
  console.log( index + ": " + $( this ).text() );
  $(this).css( "list-style-image", "none" );
  $(this).css( "list-style-type", "none" );
 
});
 $(".content li a").each(function(i) {
        $(this).addClass("item" + (i+1));
        });
//$( ".content li a" ).first().addClass('home');
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
});
</script>
<!-------------------------tabs---------------------------->
</head>

<body>
<div id="mainwrap">
<div class="contacts"><span class="conts"><img src="<?php print base_path() . path_to_theme() ?>/images/contact_icon.png">&nbsp;&nbsp;1- 844 - Erebate</span> <span class="or">or</span> <span class="cont-no">1-844-373-2383</span></div>
<div id="wrap">
<div class="column-left">
<div class="logo" >  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>
</div>
<div id="nav">
<!--icons menus-->
<div id="Nav" >
<?php print render($page['sidebar_first']); ?>
</div>
<!--icons menus-->
</div>

<div id="maintab">

<ul id="tabs">
    <li><a href="#" name="tab1">Login</a></li>
    <?php  global $user;
	
	if($user->uid=='')
	{?> <li><a href="#" name="tab2">Register</a></li>
       <?php }?>
</ul>

<div id="content"> 
    <div id="tab1">
<?php
if(user_is_logged_in()){ ?>    <a href="user/logout">
       <input name="" type="button" class="sing_btn" value="Logout"> </a>  <?php }
else{?>        <?php 
$elements = drupal_get_form("user_login"); 
$form = drupal_render($elements);
echo $form;}
?>


  </div>
    <?php 
	
	if($user->uid=='')
	{?><div id="tab2">
      <a href="user/register">
       <input name="" type="button" class="sing_btn" value="Register"> </a>  
    </div>

<?php }?></div>
</div>
</div>
<div class="column-right">
<div id="banner">
<?php print render($page['banner']); ?></div>
<div id="sub-icon">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="hd-color">
    <td height="32" align="right" class="line_bg">Rebate News </td>
    <td class="line_bg">Getting Started</td>
    <td class="line_bg">Customer Testimonials</td>
    <td >Energy Saving Tips</td>
  </tr>
  <tr>
    <td height="140" align="left" valign="bottom"><img src="<?php print base_path() . path_to_theme() ?>/images/customers.png" width="162" height="133"></td>
    <td align="center" valign="bottom"><img src="<?php print base_path() . path_to_theme() ?>/images/energy.png" width="160" height="132"></td>
    <td align="center" valign="bottom"><img src="<?php print base_path() . path_to_theme() ?>/images/wedo.png" width="160" height="133"></td>
    <td align="right" valign="bottom"><img src="<?php print base_path() . path_to_theme() ?>/images/rabates.png" width="159" height="133"></td>
  </tr>
</table>

</div>
</div>
</div></div>
<div id="mainfooter">
<div class="footer-line"></div>
<div id="footer">
<div id="terms">
<?php print render($page['footer_firstcolumn']); ?></div>
<div id="footer-nav">
<div id="ftr_nav">
<?php print render($page['footer_secondcolumn']); ?>
</div>

</div>
<div id="footer-nav">
<div id="ftr_nav">
<?php print render($page['footer_thirdcolumn']); ?>
</div>
</div>
<div id="adrs">
<?php print render($page['footer_fourthcolumn']); ?></div>
</div></div>
</body>
</html>
