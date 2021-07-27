<?php

$file = file_get_contents('test.xlsx');
$file = base64_encode($file);


$attachments = [
    "test.xlsx" => $file
];

var_dump($attachments);
var_dump($attachments);

$data = [
    "sender_name"=> "test",
    "sender_email"=> "sendpulse@kwebpage.ru",
    "subject"=> "test",
    "template_id"=> "69454c88289224f7eb5a83c1c86be7ac",
    "attachments"=>  $attachments,
    "list_id"=> 1230810
];

var_dump($data);

$data = json_encode($data);

var_dump($data);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.sendpulse.com/campaigns',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImMxOTA5YWYxNTMwZTliN2UzY2Q1MDFkM2I3NGJlOGJiY2M5MWMwODIyNGRjOTg1OGU1M2NlZWQyYWZiOGI2ZmUxZmFiNTU4NzZmMTdhYWJjIn0.eyJhdWQiOiIwZjNlZWNhMjk3M2QyMjNhZDQ5MzkzNzlhMTMzYmM0MyIsImp0aSI6ImMxOTA5YWYxNTMwZTliN2UzY2Q1MDFkM2I3NGJlOGJiY2M5MWMwODIyNGRjOTg1OGU1M2NlZWQyYWZiOGI2ZmUxZmFiNTU4NzZmMTdhYWJjIiwiaWF0IjoxNjI1MDUyMTM0LCJuYmYiOjE2MjUwNTIxMzQsImV4cCI6MTYyNTA1NTczNCwic3ViIjoiIiwic2NvcGVzIjpbXSwidXNlciI6eyJpZCI6NzEyMTU4NiwiZ3JvdXBfaWQiOm51bGwsInBhcmVudF9pZCI6bnVsbCwiYXJlYSI6InJlc3QifX0.Nvw5bDfTJ1yc1FyYrddd__fzuBI7KAuSGoTDKa85TiH4vZSbRMkEZOhb8ZkLTcjXIdWSsnzu6YksiV2LIkVRrvzyC5IDXSDdFA9l5Du_r6HonnyQ4ZXzj1RAEMo9tdDvbtDcsZs1nWGrOWm7fBFyq4c2NjeYOIOnwyzFCGZ4WhveUz6_EV0ZxFw7Fc_8I_XG5Ax5kcBCiQENHoi7nSaCVdygWKFmoL8l50phYDRm5OjMctEVA4nLxdDukCRqFvN9KW5f94KG1508yqg7xmdaf2erkM48hVgepFR38NovStw7DYuuhqAn1MKZFzZIXTUM2hIbThDgyaIeLDXUemjxGw',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
