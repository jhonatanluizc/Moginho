<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/schema",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n\t\"user_name\":\"cavaloo\",\n\t\"schema\":{\n\t\t\"name\":{\n\t\t\t\"type\":\"String\",\n\t\t\t\"require\":true\n\t\t},\n\n\t\t\"email\":{\n\t\t\t\"type\":\"String\",\n\t\t\t\"unique\":\"true\",\n\t\t\t\"required\":\"true\",\n\t\t\t\"lowercase\":\"true\"\n\t\t},\n\n\t\t\"password\":{\n\t\t\t\"type\":\"String\",\n\t\t\t\"required\":\"true\",\n\t\t\t\"select\":\"false\"\n\t\t}\n\t}\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
