
<?php
$request_data = array(
        'app_key'=>'app_key_value',
          'app_secret'=>'app_secret_value’
        );  
$url = curl_init('{base_URL}/tokenized/checkout/token/grant');
$request_data_json=json_encode($request_data);
$header = array(
        'Content-Type:application/json',
        'username:username_value,               
        'password:password_value'
        );              
curl_setopt($url,CURLOPT_HTTPHEADER, $header);
curl_setopt($url,CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($url,CURLOPT_RETURNTRANSFER, true);
curl_setopt($url,CURLOPT_POSTFIELDS, $request_data_json);
curl_setopt($url,CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

curl_exec($url);
curl_close($url);
?>