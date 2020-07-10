<?php

$curl = curl_init();

$username = $_GET["username"];
$id = $_GET["id"];

$aJson = array( 
  "user_name" => $username,
  "find" => array("_id" => $id)
);

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/find",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($aJson),
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$datasObject = json_decode($response);
$datas = array();

foreach ($datasObject as $key => $value) {
  array_push($datas, (array) $value);
}

$data = $datas[0];
