<style>

.ac_info_fileds{
width:290px;
color:#CCCCCC;
font-size:12px;
line-height:24px;

border:solid 1px #fff;
padding:2px 6px;
/ Safari 3-4, iOS 1-3.2, Android 1.6- /
  -webkit-border-radius: 6px; 

  / Firefox 1-3.6 /
  -moz-border-radius: 6px; 
  
  / Opera 10.5, IE 9, Safari 5, Chrome, Firefox 4, iOS 4, Android 2.1+ /
  border-radius: 6px;
     -moz-box-shadow:   0px 1px 5px #ccc inset0;
   -webkit-box-shadow: 0px 1px 5px #ccc inset;
   box-shadow:         0px 1px 5px #ccc inset;
}
h3 span hr
{
font-size: 14px!important;
text-transform: uppercase;
padding: 6px 0px 10px 0px;
font-size: 9px;
font-weight: bold;
border-bottom:solid 1px #000;
font-family: Arial, Helvetica, sans-serif;
}

label
{
display:inline;
font-size: 12px;
font-weight: bold;
 width:180px;
/* float:left;*/
  display: inline-block;
color: #666666;
font-family: Arial, Helvetica, sans-serif;
}
</style>
<strong class="dash" style="color:#103766;"><?php print render($intro_text); ?></strong>
<div class="energy-user-register-form-wrapper">
  <?php print drupal_render_children($form); ?>
</div>

