<?php 
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
function pay_bill($fname,$lname,$state,$add,$zip,$city,$cvv,$expiry,$ctype,$cno,$amt){

// Include config file
$sandbox = FALSE;
 
// Set PayPal API version and credentials.
$api_version = '85.0';
$api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
$api_username = $sandbox ? 'apeck-facilitator_api1.energyrebateoutlet.com' : 'apeck_api1.energyrebateoutlet.com';
$api_password = $sandbox ? 'JST6X2TG9LY7GF6B' : 'U2M6X2BBAHDN92E4';
$api_signature = $sandbox ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31AAEoqSedG8v844oL2vmRLUItupbw' : 'AFcWxV21C7fd0v3bYYYRCpSSRl31AdOJGuy3615ZlDZcWoxw5dYSSsNA';

$request_params = array
                    (
                    'METHOD' => 'DoDirectPayment', 
                    'USER' => $api_username, 
                    'PWD' => $api_password, 
                    'SIGNATURE' => $api_signature, 
                    'VERSION' => $api_version, 
                    'PAYMENTACTION' => 'Sale',                   
                    'IPADDRESS' => $_SERVER['REMOTE_ADDR'],
                    'CREDITCARDTYPE' => $ctype, 
                    'ACCT' =>$cno,                        
                    'EXPDATE' => $expiry,           
                    'CVV2' => $cvv, 
                    'FIRSTNAME' =>$fname, 
                    'LASTNAME' => $lname, 
                    'STREET' => $add, 
                    'CITY' =>$city, 
                    'STATE' => $state,                     
                    'COUNTRYCODE' => 'US', 
                    'ZIP' => $zip, 
                    'AMT' => $amt, 
                    'CURRENCYCODE' => 'USD', 
                    'DESC' => 'Testing Payments Pro'
                    );
$nvp_string = '';
foreach($request_params as $var=>$val)
{
    $nvp_string .= '&'.$var.'='.urlencode($val);    
}

$curl = curl_init();
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_URL, $api_endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $nvp_string);
 
$result = curl_exec($curl);     
curl_close($curl);

$response=NVPToArray($result);

			
if($response['ACK']=='Success')
{
return $response['ACK'];

}
else
{
return $response['L_LONGMESSAGE0'];

}

}

?>