<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Energy Outlet</title>
		<link href="<?php print base_path() . path_to_theme() ?>/css/energyoutlet.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php print base_path() . path_to_theme() ?>/css/videopopup.css" />
		<!-------------------------tabs---------------------------->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/js/usa_mapdata.js"></script>
		<script  type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/js/usa_map.js"></script>
		<script src="<?php print base_path() . path_to_theme() ?>/js/jquery.videopopup.js"></script>
		<?php if(arg(0)=='search-rebates')
	{?>
		<script>

window.sessionStorage.setItem("check",0);
  window.sessionStorage.setItem("count",0);

$( document ).ready(function() {



var url= window.location.href;
if (url.indexOf("search-rebates?term_node_tid_depth") !=-1) {
  
$('#edit-webform-steps').html('<span class="webform-step disable"><span>Search Rebate Program<input class="step-button form-submit" type="submit" id="edit-btn-1" name="step-btn" value="Search Rebate Program"></span></span><span class="webform-step current first"><span>Select Rebate<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-2" name="step-btn" value="Select Rebate"></span></span><span class="webform-step next"><span>Site Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-3" name="step-btn" value="Site Information"></span></span><span class="webform-step disable"><span>Project Information<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-4" name="step-btn" value="Project Information"></span></span><span class="webform-step disabled"><span>Project Summary<input class="step-button disabled form-submit form-button-disabled" disabled="disabled" type="submit" id="edit-btn-5" name="step-btn" value="Project Summary"></span></span>');

}
else
{
  $('.view.view-search-rebate.view-id-search_rebate .view-content').html('<div id="map" style="width: 700px;  margin-left: auto; margin-right: auto; margin-bottom: 8px;"></div>');

}

});</script>
		<?php }?>
		<?php if(arg(0)=='rebates-news' || arg(0)=='testimonials' || arg(0)=='search-rebates' || arg(0)=='search-state-rebates'){?>
		<script>
			$(document).ready(function(){

				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
		<?php }?>
		<!-------------------------tabs---------------------------->
		</head>
		<body onLoad="map()">
<?php
      // We hide the comments and links now so that we can render them later.
if(arg(0)=='contact')
{
?>
<script>

$( document ).ready(function() {
$('.with-tabs').html('Contact Us');
$('#edit-submit').val('Contact Us');
});
</script>
<style>
.form-item {
	float:left;
}
#edit-submit {
	background: none repeat scroll 0 0 #93C846;
	border: 0 solid;
	color: #ffffff;
	cursor: pointer;
	font-size: 13px;
	font-weight: bold;
	line-height: 20px;
	padding: 2px 0px;
	width: 150px;
}
label {
	display:inline;
	font-size: 12px;
	font-weight: bold;
	width:180px;
	/* float:left;*/

  display: inline-block;
	color: #666666;
	font-family: Arial, Helvetica, sans-serif;
}
#edit-message {
	color:#000000;
	font-size:12px;
	line-height:24px;
	border:solid 1px #fff;
	padding:2px 6px;
 / Safari 3-4, iOS 1-3.2, Android 1.6- / -webkit-border-radius: 6px;
 / Firefox 1-3.6 / -moz-border-radius: 6px;
 / Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ / border-radius: 6px;
	-moz-box-shadow:   0px 1px 5px #ccc inset0;
	-webkit-box-shadow: 0px 1px 5px #ccc inset;
	box-shadow:         0px 1px 5px #ccc inset;
	width: 46%;
	margin-left: 28%;
}
.grippie {
	width: 46%;
	margin-left: 28%;
}
#edit-name, #edit-mail, #edit-subject {
	width:290px;
	color:#000000;
	font-size:12px;
	line-height:24px;
	border:solid 1px #fff;
	padding:2px 6px;
 / Safari 3-4, iOS 1-3.2, Android 1.6- / -webkit-border-radius: 6px;
 / Firefox 1-3.6 / -moz-border-radius: 6px;
 / Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ / border-radius: 6px;
	-moz-box-shadow:   0px 1px 5px #ccc inset0;
	-webkit-box-shadow: 0px 1px 5px #ccc inset;
	box-shadow:         0px 1px 5px #ccc inset;
}
</style>
<?php
}?>
<?php
      // We hide the comments and links now so that we can render them later.


global $base_url;
if(arg(0)=='search-rebates')
{

?>
<script>
$( document ).ready(function() {
$('#edit-submit-search-rebate').val('SEARCH');
});
</script>
<?php }
else{?>
<?php }?>
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
      </div>
              <div class="ResponsiveMenu" style="display:none;">Menu <i class="fa fa-bars" aria-hidden="true" style="float: right; margin-top: 3px;"></i></div>
              <div class="ResponsiveMenuDropdown">
        <div id="nav"> 
                  <!--icons menus-->
                  <div id="Nav" > <?php print render($page['sidebar_first']); ?>
            <?php
global $user;

module_load_include('inc','webform','includes/webform.submissions');
$subs = webform_get_submissions(array('nid'=>13, 'uid' => $user->uid));
if($subs)
{
foreach ($subs as $sub){
$_SESSION['sid']= $sub->sid;
}
}
if(arg(0)=='dashboard' && $user->uid!='')
{

$uemail=$user->mail;
$submissions = webform_get_submissions(array('nid'=>18));
$messages_web=array();
/*echo "<pre>";
print_r($submissions);
echo "</pre>";
*/
foreach ($submissions as $submission){

    $email=$submission->data[2][0];
if($email==$user->uid)
{

    $message=$submission->data[3][0];
	array_push($messages_web,$message);
}
}

?>
            <style>

#block-views-rebate-library-block, .views-table

{

width:678px;

}

.view-header p

{

margin-bottom: 10px;

background: #93C846;

border-radius: 10px;

-moz-border-radius: 10px;

-khtml-border-radius: 10px;

padding: 10px 10px 10px 30px;

color: #002A5C;

font-weight: bold;

font-size: 12px;

font-family: Arial, Helvetica, sans-serif;

}



.mess:before {

    content: "\00BB \0020";

    color: #93C846;

}

</style>
            <div class="Newrebate"><a href="<?php echo $base_url;?>/search-rebates" style="text-decoration:none;color:#fff;">New Rebate Application</a></div>
            <div class="mes-cent"> Message Center
                      <div class="mes-wht">
                <?php 
echo "<ul >";
foreach($messages_web as $mess)
{
echo "<li class='mess'>".$mess."</li>";
}

echo "<ul>";
?>
              </div>
                    </div>
            <?php }
elseif(arg(0)=='dashboard' && $user->uid=='')
{
  header('Location:'.$base_url.'/user');
exit;
}?>
          </div>
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
              <?php 
if(arg(1)=='register')
{?>
              <style>
#nav .block-block {
	display:none !important;
}
.menu-007 {
	color: #1c1f7d;
    font-size: 12px;
    text-decoration: none;
    font-family: Arial;
    display: block;
    height: 30px;
    float: left;
    font-weight: bold;
    padding-top: 5px;
    padding-left: 18px;
}
.menu-007:hover {
    color: #93c846;
    font-size: 12px;
    text-decoration: none;
    font-family: Arial;
    display: block;
    height: 30px;
    font-weight: bold;
    padding-top: 5px;
    padding-left: 18px;
}
.file-style {
	color: #000;
    font-size: 22px;
    float: left;
    padding-left: 12px;
}
</style>
              <?php }

?>
            </div>
    <div class="column-right col-lg-9">
              <div class="dash_thd col-lg-12"></div>
              <div class="row">
        <div class="dash"></div>
        <div class="page-wrap col-lg-12">
                  <div class="row">
            <section class="main-sidebar col-lg-12">
                      <?php
      // We hide the comments and links now so that we can render them later.


global $base_url;
global $user;
if((arg(0)=='search-rebates' || arg(0)=='search-state-rebates') && $user->uid!='')
{?>
                      <style>
#block-system-main-menu
{
display:none!important;
}
</style>
                      <?php
}
 if ($tabs): ?>
                      <div id="tabs-wrapper" class="clearfix">
                <?php endif; ?>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                <?php if(arg(0)!='search-rebates'){?>
                <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>>
                          <?php if(arg(0)!='user'){print $title;} ?>
                        </h1>
                <?php }?>
                <?php endif; 
		   if ($tabs): ?>
                <?php if(arg(0)!='user'){print render($tabs); }?>
              </div>
                      <?php endif; ?>
                      <?php 
global $user;

  print $messages;
if (node_type_get_name($node)!='Rebate') {

 print render($page['content']);
 if(arg(0)=='dashboard_page')
{?>
                      <script>
window.sessionStorage.setItem("check",0);
  window.sessionStorage.setItem("count",0);
</script>
                      <div class="dash-green" style="margin-top:11px;width:96%;">Applications shared by Admin</div>
                      <?php
$subms = webform_get_submissions(array('nid'=>12, 'uid' => $user->uid));
 $webnode = node_load(12);
$docs=array();

 foreach ($webnode->webform['components'] as $key => $component) {
if($component['type']=='multiple_file')
{
array_push($docs,$component['cid']);
}
}

echo '<table class="views-table cols-3">  
  <thead><tr>
    <th class="views-field views-field-value-1">Rebate Title </td>
    <th class="views-field views-field-value-1">Documents</td>
  </tr></thead>';
foreach($subms as $sub)
{
$count=0;
$sizes=array();
foreach($docs as $doc)
{

if(sizeof($sub->data[$doc])>0){
$c=0;
  for($k=0;$k<sizeof($sub->data[$doc]);$k++)
  {
  $fids = $sub->data[$doc][$k];
	$files = file_load($fids);
	if($files->uid==1)
	{
	  $c++;
	}
  }
  
  $sizes[$doc]=$c;
}
}
foreach($sizes as $key=> $value)
{
$count=$count+$value;
}
if($count>0){
echo '<tr  class="even"><td>'. $sub->data[36][0].'</td><td>';


foreach ($webnode->webform['components'] as $key => $component) {
	if($component['type']=='multiple_file' && $sizes[$component['cid']]>0)
	{
	echo '<table>
        <tr  class="even">
          <td>'.$component['name'].'</td>';
		 echo ' <td ><table >';
       
	   $len=sizeof($sub->data[$component['cid']]);
	        for($j=0;$j<$len;$j++)
{
   $fid = $sub->data[$component['cid']][$j];
	$file = file_load($fid);
	$uri = $file->uri;
$url = file_create_url($uri);
	if($file->uid==1)
	{
	     echo ' <tr class="even">
            <td><a href="'.$url.'">'.$file->filename.'</a></td>
              </tr>   ';
			  }}           
          echo '</table></td>';
		  
		  
		  
		  
		  echo '</tr>
          </table>';
	}


 }
	}	  
}echo '</td></tr>
</table>';
  
}
if(arg(0)=='dashboard_page')
{?>
                      <div class="dash-green" style="margin-top:11px;width:96%;">Documents Library</div>
                      <?php
$subms = webform_get_submissions(array('nid'=>12, 'uid' => $user->uid));
 $webnode = node_load(12);
$docs=array();

 foreach ($webnode->webform['components'] as $key => $component) {
if($component['type']=='multiple_file')
{
array_push($docs,$component['cid']);
}
}

echo '<table class="views-table cols-3">  
  <thead><tr>
    <th class="views-field views-field-value-1">Rebate Title </td>
    <th class="views-field views-field-value-1">Documents</td>
  </tr></thead>';
foreach($subms as $sub)
{
$count=0;
$sizes=array();
foreach($docs as $doc)
{

if(sizeof($sub->data[$doc])>0){
$c=0;
  for($k=0;$k<sizeof($sub->data[$doc]);$k++)
  {
  $fids = $sub->data[$doc][$k];
	$files = file_load($fids);
	if($files->uid!=1)
	{
	  $c++;
	}
  }
  
  $sizes[$doc]=$c;
}
}
foreach($sizes as $key=> $value)
{
$count=$count+$value;
}
if($count>0){
echo '<tr  class="even"><td>'. $sub->data[36][0].'</td><td>';


foreach ($webnode->webform['components'] as $key => $component) {
	if($component['type']=='multiple_file' && $sizes[$component['cid']]>0)
	{
	echo '<table>
        <tr  class="even">
          <td>'.$component['name'].'</td>';
		 echo ' <td ><table >';
       
	   $len=sizeof($sub->data[$component['cid']]);
	        for($j=0;$j<$len;$j++)
{
   $fid = $sub->data[$component['cid']][$j];
	$file = file_load($fid);
	$uri = $file->uri;
$url = file_create_url($uri);
	if($file->uid!=1)
	{
	     echo ' <tr class="even">
            <td><a href="'.$url.'">'.$file->filename.'</a></td>
              </tr>   ';
			  }}           
          echo '</table></td>';
		  
		  
		  
		  
		  echo '</tr>
          </table>';
	}


 }
	}	  
}echo '</td></tr>
</table>';
  
}
}
else {
  // Not logged in
  if($user->uid)
  {
   
     print render($page['content']);
  }
 
  else
  {
  header('Location:'.$base_url.'/user');
exit;
  }
}

 	    ?>
                      <?php/*
if(arg(0)=='node' && arg(1)==13 && arg(2)=='submission')
{
		    include("pay.html"); }	
	
	 if(arg(0)=='node' && arg(1)=='13')
	 {
		    include("pay.html"); }*/
 ?>
                    </section>
            <section class="main-content"> <?php print render($page['sidebar_second']); ?> </section>
          </div>
                </div>
      </div>
            </div>
  </div>
          <?php if (arg(0) == 'node' || arg(0)=='contact' ||  arg(0)=='search-rebates' || arg(0)=='search-state-rebates' || arg(0)=='dashboard' || arg(0)=='taxonomy' || arg(0)=='content' || arg(0)=='rebates-news'  || arg(0)=='user' || arg(0)=='testimonials')
{ ?>
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
                  <div class="col-lg-12" id="ftr_nav"><?php print render($page['footer_secondcolumn']); ?> </div>
                </div>
      </div>
              <div id="footer-nav" class="col-lg-3"> <span class="ExpandIcon" style="display:none;" id="ExpandIcon1"><i class="fa fa-plus" aria-hidden="true"></i></span>
        <div class="row">
                  <div class="col-lg-12" id="ftr_nav"><?php print render($page['footer_thirdcolumn']); ?> </div>
                </div>
      </div>
              <div id="adrs" class="col-lg-3"> <span class="ExpandIcon" style="display:none;" id="ExpandIcon2"><i class="fa fa-plus" aria-hidden="true"></i></span>
        <div class="row">
                  <div class="col-lg-12"><?php print render($page['footer_fourthcolumn']); ?></div>
                </div>
      </div>
            </div>
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
<?php }?>
<?php
function yFunction($session)
{

$_SESSION['processid']=$session;

}
?>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58712615-1', 'auto');

  ga('send', 'pageview');
function test(id,bill){

$.ajax({
 type: "POST",
                url: "<?php echo $base_url;?>/bill.php",
                data: { 
				id: id, 				
				bill_amount:bill,
				test:'testing'
				 },
                success:function(result){
	 window.location='<?php echo $base_url;?>/content/rebate-process';
        }
		});
		
}
</script>
</body>
</html>
