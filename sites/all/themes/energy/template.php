<?php


require_once DRUPAL_ROOT . '/sites/all/themes/energy/process-credit-card.php'; 
/**
* theme_menu_link()
*/
function energy_menu_link(array $variables) {
//add class for li

   $variables['element']['#attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);
  return theme_menu_link($variables);
}

function energy_form_alter(&$form, &$form_state, $form_id)
{
global $user;
global $base_url;
if ($form_id == 'webform_client_form_13')
	{
		$form['#validate'][] = 'energy_paypal_form';
	}
if($form_id=='user_profile_form')
{
 $form['account']['current_pass']['#description']='';
	    $form['contact']['#access'] = FALSE;
		$form['block']['#access'] = FALSE;
		 $form ['picture']['#access'] = '0';
}
if($form_id=='webform_client_form_12' && $user->uid=='')
{
  header('Location:'.$base_url.'/user');
exit;
}
if($form_id=='webform_client_form_12')
{

?>
<style>
fieldset{
width :50%;
padding : 0;
margin : 0;
display : inline-block;
}
.webform-steps-wrapper span.first
{
display:none;
}
.webform-component-textfield label {
  float: left;
  width: 11em; /* Adjust for the width of your labels */
}
.fieldset-legend
{
font-weight:bold;
}
.meta
{
display:none;
}
.grippie
{
display:none;
}

label
{
font-size:11px;
font-weight:bold;
color:#666666;
font-family:Arial, Helvetica, sans-serif;}
</style>

<?php
/*
echo "<pre>";
print_r($form);

echo "</pre>";*/
$form['#node']->webform['components'][5]['extra']['attributes']='info_fileds';
}
if($form_id=='simplenews_block_form_2')
{
$form['mail']['#attributes']['placeholder'] = t( 'EMAIL' );
$form['mail']['#title']='';
$form['mail']['#size']='10';
$form['action']['#value']='SUBMIT';
$form['submit']['#value']='SUBMIT';
$form['submit']['#attributes']['class'][0]='sub-btns';
$form['mail']['#attributes']['class'][0]='search';


}
}
function energy_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'energy') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'energy_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'energy') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'energy_preprocess_user_register_form'
    ),
  );
 
  return $items;
}

function energy_preprocess_user_login(&$vars) {

  
  $vars['form']['pass']['#description'] = '';
   $vars['form']['name']['#title'] = '';
  $vars['form']['name']['#description'] = '';
   $vars['form']['pass']['#title'] = '';
  $vars['form']['actions']['submit']['#value']=t('Sign In');
 $vars['form']['actions']['submit']['#attributes']['class'][0]= 'sing_btn';
$vars['form']['name']['#attributes']['placeholder'] = t( 'Username' );

  $vars['form']['name']['#attributes']['class'][0]='username';
    $vars['form']['pass']['#attributes']['class'][0]='password';
  //$vars['form']['pass']['#attributes']['placeholder'] = t( 'Password' );
  //$vars['form']['name']['#title']=t('Email');
  //$vars['form']['remember_me']['#title']=t('This is a public computer');
  //$current_path = drupal_get_path_alias($_GET['q']);

  // If the user is logging in from the 'example' page, redirect to front.
/*  if ($current_path == 'example') {
    $_GET['destination'] = '/careerprofile';
  }*/
 
}

function energy_preprocess_user_register_form(&$vars) {


  $vars['intro_text'] = t('Account Profile');
  
	    $vars['form']['account']['mail']['#title']='Email Address';
		 $vars['form']['account']['pass1']['#title']='Confirm Password';
	   $vars['form']['actions']['submit']['#value']=t('Create Account');
	      $vars['form']['actions']['submit']['#attributes']['class'][0]='later_loginbtn';
	   $vars['form']['account']['mail']['#description']='';
	   $vars['form']['account']['pass']['#description']='';
	   $vars['form']['account']['name']['#description']='';
	   $vars['form']['account']['name']['#weight']=50;
	    $vars['form']['account']['pass']['pass1']['#attributes']['class'][0]='ac_info_fileds';
		$vars['form']['account']['pass']['pass2']['#attributes']['class'][0]='ac_info_fileds';
		 $vars['form']['account']['mail']['#attributes']['class'][0]='ac_info_fileds';
		  $vars['form']['group_personal_information']['field_last_name']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';
  $vars['form']['group_personal_information']['field_address']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
  $vars['form']['group_personal_information']['field_states']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
  $vars['form']['group_personal_information']['field_city']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
  $vars['form']['group_personal_information']['field_zipcode']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';	
  $vars['form']['group_personal_information']['field_first_name']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
		
  $vars['form']['group_business_profile']['field_company_name']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
  $vars['form']['group_business_profile']['field_what_information_do_you_se']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
  $vars['form']['group_business_profile']['field_please_specify']['und'][0]['value']['#attributes']['class'][3]='ac_info_fileds';		
   
}
function energy_paypal_form(&$form, &$form_state)
{
    $fname = $form['submitted']['first_name']['#value'];
	$lname = $form['submitted']['last_name']['#value'];
	$creditno = $form['submitted']['credit_card_number']['#value'];
	$cvv= $form['submitted']['city']['#value'];
	$ctype= $form['submitted']['card_type']['#value'];
	$state= $form['submitted']['state']['#value'];
	$city= $form['submitted']['payment_city']['#value'];
	$zipcode= $form['submitted']['zipcode']['#value'];
	$cexpiry=$form['submitted']['month']['#value']. $form['submitted']['year']['#value'];
	$address= $form['submitted']['address']['#value'];
	$billamt=$_SESSION['bill'];
	$result=pay_bill($fname,$lname,$state,$address,$zipcode,$city,$cvv,$cexpiry,$ctype,$creditno,$billamt);
	
if($result=='Success')
{
header('Location: '.$base_url.'/dashboard');
$_SESSION['bill']='';
drupal_set_message('Your payment is successful','status');
exit;
}
else
{
header('Location: '.$base_url.'/content/enter-payment');
drupal_set_message($result,'error');
exit;
}
}
?>