<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sendpulse.com/oauth/access_token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => array('grant_type' => 'client_credentials','client_id' => '6ff01ae1adbdf6290a0f60785aa163c4','client_secret' => 'f5c37d7292c11187cb5b847d513f5c24'),
    CURLOPT_HTTPHEADER => array(
        "Content-Type: multipart/form-data"
    ),
    CURLOPT_VERBOSE => true,
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>