<?php
// Set sandbox (test mode) to true/false.
$sandbox = TRUE;
 
// Set PayPal API version and credentials.
$api_version = '85.0';
$api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
$api_username = $sandbox ? 'apeck-facilitator_api1.energyrebateoutlet.com' : 'apeck-facilitator_api1.energyrebateoutlet.com';
$api_password = $sandbox ? 'JST6X2TG9LY7GF6B' : 'JST6X2TG9LY7GF6B';
$api_signature = $sandbox ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31AAEoqSedG8v844oL2vmRLUItupbw' : 'AFcWxV21C7fd0v3bYYYRCpSSRl31AAEoqSedG8v844oL2vmRLUItupbw';
function NVPToArray($NVPString)
{
    $proArray = array();
    while(strlen($NVPString))
    {
        // name
        $keypos= strpos($NVPString,'=');
        $keyval = substr($NVPString,0,$keypos);
        // value
        $valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
        $valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);
        // decoding the respose
        $proArray[$keyval] = urldecode($valval);
        $NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
    }
    return $proArray;
}
?>