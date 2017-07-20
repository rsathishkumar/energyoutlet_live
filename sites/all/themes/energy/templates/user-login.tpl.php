<div class="energy-user-login-form-wrapper">
  <?php 
 if(arg(0)=='user')
 {
 ?>
  <style>
#maintab {
	display:none !important;}

.username
{

color: #000000;
font-size: 14px;
line-height: 24px;
width: 390PX;
float: left;
border: solid 1px #fff;
padding: 10px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
-moz-box-shadow: 0px 1px 5px #ccc inset0;
-webkit-box-shadow: 0px 1px 5px #ccc inset;
box-shadow: 0px 1px 5px #ccc inset;
background:none!important;
}
.password
{

color: #000000;
font-size: 14px;
line-height: 24px;
width: 390PX;
float: left;
border: solid 1px #fff;
padding: 10px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
-moz-box-shadow: 0px 1px 5px #ccc inset0;
-webkit-box-shadow: 0px 1px 5px #ccc inset;
box-shadow: 0px 1px 5px #ccc inset;
background:none!important;
}
.sing_btn
{
cursor: pointer;
border: solid 0px;
background: #93C846;
line-height: 20px;
width: 150px;
font-size: 14px;
color: #FFFFFF;
font-weight: bold;
}

#dashboard {
	width:100% !important;
}

@media (max-width: 768px) {
.FloatLeft {
	float:left;}
.password {
	width:100%;
}

.username {
	width:100%;
}
}

</style>
  <div id="dashboard">
    <div id="dot" style="width:100%;">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3">Dont have an Account?</div>
          <div class="col-md-9"><a href="user/register" style="text-decoration:none;">
            <input name="" type="button" class="acct" value="Create an Account">
            </a></div>
        </div>
      </div>
      <div class="dot-line"></div>
      <div id="login">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 ant">Already have an account?</div>
            <div class="col-md-9">
            <div class="row">
              <div class="col-md-12 userhd FloatLeft">Email Address</div>
              <div class="col-md-12 FloatLeft">
                <?php

		
		$form['actions']['submit']['#value']='Login';
		$form['name']['#attributes']['placeholder']='';
		 print drupal_render($form['name']);?>
              </div>
              <div class="col-md-12 userhd FloatLeft">Password <span class="fotget"><a href="user/password">Forgot it?</a></span></div>
              <div class="col-md-12 FloatLeft">
                <?php    print drupal_render($form['pass']);?>
              </div>
              <div class="col-md-12 FloatLeft">
                <div class="col-md-4">
                  <?php

	print drupal_render($form['form_build_id']);
                      print drupal_render($form['form_id']); 
                      print drupal_render($form['actions']);?>
                </div>
                <div class="col-md-8">
                  <input name="" type="radio" value="" class="forget">
                  <span  class="forget">Remember Me</span> </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- /user-login-custom-form -->
  
  <?php

 }
 else
 {
//  $vars['form']['pass']['#attributes']['placeholder'] = t( '******' );
  $form['pass']['#attributes']['placeholder']='******';
  print drupal_render_children($form);
  
  }
  ?>
 
</div>