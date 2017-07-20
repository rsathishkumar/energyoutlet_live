<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Energy Outlet</title>
<link href="<?php print base_path() . path_to_theme() ?>/css/energyoutlet.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-------------------------tabs---------------------------->
<style>
.form-item {
	float:left;
}
.issues-link, label[for=edit-mail] {
	display:none;
}
.feed-icon {
	display:none;
}
.simplenews-subscribe #edit-mail {
	width: 91px;
	margin-right: 2px;
	padding: 0 4px;
	border-radius: 30px;
}
#block-simplenews-1 h2 {
	display:none;
}
.simplenews-unsubscribe .form-submit {
	border:solid 1px green;
	float:right;
	margin-bottom:-30px;
	font-weight: bold;
	margin: 0px;
	padding: 0px;
	background: none;
	border: solid 0px red;
	color: #131575;
	text-transform: uppercase;
	font-family: "Arial Narrow";
	font-size: 14px;
	margin-left: 71%;
	bottom: 28px;
	position: relative;
	margin-top:16%!important;
	margin-bottom: 0px!important;
}
</style>
<script>


window.sessionStorage.setItem("count",0);
window.localStorage.setItem("count",0);
function myFunction(uid)
{
if(uid=='0')
{
$('#edit-submit').val('Submit');
}
if($('#edit-submit').val()!='Unsubscribe')
{
$('#edit-submit').val('Submit');
}
if( $('#edit-mail').length==0 )
{
$('#edit-submit').addClass('label_class');

}

$('#edit-mail').attr("placeholder", "EMAIL");
}
$(document).ready(function() {
myFunction($('#uid').val());

});
/*
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
        });*/
//$( ".content li a" ).first().addClass('home');
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
/*    
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
});*/
</script>
<!-------------------------tabs---------------------------->
</head>

<body onLoad="myFunction()">
<?php 
require_once DRUPAL_ROOT . '/sites/all/themes/energy/rebates.php';
global $user;
?>
<input type="hidden" id="uid" value="<?php echo $user->uid;?>"/>
<div id="mainwrap" class="container">
<div class="contacts col-lg-12"><span class="conts"><img src="<?php print base_path() . path_to_theme() ?>/images/contact_icon.png">&nbsp;&nbsp;1- 844 - Erebate</span> <span class="or">or</span> <span class="cont-no">1-844-373-2283</span></div>
<div id="wrap">
  <div class="column-left col-lg-3">
    <div class="logo" >
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
      <div id="site-slogan"<?php if ($site_slogan) { print ' class="element-invisible"'; } ?>> <?php print $site_slogan; ?> </div>
      <?php endif; ?>
      <?php print $messages;?> </div>
    <div class="ResponsiveMenu" style="display:none;">Menu <i class="fa fa-bars" aria-hidden="true" style="float: right; margin-top: 3px;"></i></div>
    <div class="ResponsiveMenuDropdown">
      <div id="nav"> 
        <!--icons menus-->
        <div id="Nav" > <?php print render($page['sidebar_first']); ?> </div>
        <!--icons menus--> 
      </div>
    </div>
    <script>
$( document ).ready(function() {
   $( ".ResponsiveMenu" ).click(function() {
    $(".ResponsiveMenuDropdown").toggle();
  });
});
</script>
    <div id="maintab">
      <ul id="tabs">
        <li><a href="#" name="tab1">Sign In</a></li>
        <?php  global $user;
	
	if($user->uid=='')
	{?>
        <?php }
	   else
	   {
	   getprocessedrebates($user->uid);
	   }?>
      </ul>
      <div id="content">
        <div id="tab1">
          <?php
if(user_is_logged_in()){ ?>
          <a href="user/logout">
          <input name="" type="button" class="sing_btn" value="Logout">
          </a>
          <?php }
else{?>
          <?php 
$elements = drupal_get_form("user_login"); 
$form = drupal_render($elements);
echo $form;}
?>
        </div>
        <?php 
	
	if($user->uid=='')
	{?>
        <div id="tab2"> <a href="user/register">
          <input name="" type="button" class="sing_btn" value="Register">
          </a> </div>
        <?php }?>
      </div>
    </div>
  </div>
  <div class="column-right col-lg-9">
    <div id="banner"> <?php print render($page['banner']); ?></div>
    <div id="sub-icon" class="col-lg-12" style="padding:0px;">
      <div class="col-lg-3 col-xs-6" style="padding:0px;"><?php print render($page['below_firstcolumn']); ?></div>
      <div class="col-lg-3 col-xs-6" style="padding:0px;"><?php print render($page['below_secondcolumn']); ?></div>
      <div class="col-lg-3 col-xs-6" style="padding:0px;"><?php print render($page['below_thirdcolumn']); ?></div>
      <div class="col-lg-3 col-xs-6" style="padding:0px;"><?php print render($page['below_fourthcolumn']); ?></div>
    </div>
  </div>
</div>
<div id="mainfooter" class="col-lg-12">
<div class="footer-line"></div>
<div id="footer" class="col-lg-12">
  <div id="terms" class="col-lg-3">
    <div class="row">
      <div class="col-lg-12"><?php print render($page['footer_firstcolumn']); ?></div>
    </div>
  </div>
  <div id="footer-nav" class="col-lg-3"> <span class="ExpandIcon" style="display:none;" id="ExpandIcon"><i class="fa fa-plus" aria-hidden="true"></i></span>
    <div class="row">
      <div class="col-lg-12" id="ftr_nav"> <?php print render($page['footer_secondcolumn']); ?> </div>
    </div>
  </div>
  <div id="footer-nav" class="col-lg-3"> <span class="ExpandIcon" style="display:none;" id="ExpandIcon1"><i class="fa fa-plus" aria-hidden="true"></i></span>
    <div class="row">
      <div id="ftr_nav" class="col-lg-12"> <?php print render($page['footer_thirdcolumn']); ?> </div>
    </div>
  </div>
  <div id="adrs" class="col-lg-3"> <span class="ExpandIcon" style="display:none;" id="ExpandIcon2"><i class="fa fa-plus" aria-hidden="true"></i></span>
    <div class="row">
      <div class="col-lg-12"><?php print render($page['footer_fourthcolumn']); ?></div>
    </div>
  </div>
  <script>
        var c = 1;
        //For Div full screen expand and collapse
        $('.fa-plus').click(function () {
          c++;
          $(this).toggleClass('fa-minus');p
        });
        $('#ExpandIcon').click(function (e) {
          $('.content .view .view-content ul').toggleClass('ShowHideDT');
        });
        $('#ExpandIcon1').click(function (e) {
          $('.content li').toggleClass('ShowHideDT');
        });
        $('#ExpandIcon2').click(function (e) {
          $('.adr , .socal-icon').toggleClass('ShowHideDT');
        });
      </script>
  <?php
function setsession($session)
{

$_SESSION['processid']=$session;

echo "sds";exit;}
?>
  <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58712615-1', 'auto');

  ga('send', 'pageview');

</script> 
</div>
</div>
</div>
</body>
</html>