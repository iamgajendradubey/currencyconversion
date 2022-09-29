<?php 
header("Content-Type:application/json");
$url =  "https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/dw/oauth2/access_token?client_id=88186553-367a-4c61-8161-992902296e76&grant_type=urn:demandware:params:oauth:grant-type:client-id:dwsid:dwsecuretoken";
$curl = curl_init();
curl_setopt_array($curl, [
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,   
CURLOPT_FOLLOWLOCATION => true,   
CURLOPT_ENCODING => "",    
CURLOPT_MAXREDIRS => 10,   
CURLOPT_TIMEOUT => 30,    
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
CURLOPT_CUSTOMREQUEST => "POST",   
CURLOPT_HTTPHEADER => [
    "Authorization: Basic YWFzaHV0b3NoLm5hbWRlb0Bjb2Rlc3F1YXJldGVjaC5jb206QWFzaHVAY29kZXNxdWFyZUAyNzA2OmNvZGVzcXVhcmUyMDIy",        
    "Content-Type: application/x-www-form-urlencoded"],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
echo $response;
?>