<?php

$user_name = $_GET["table"];


$aJson = array( 
    "user_name" => $user_name
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/list",
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

//echo $response;

$datasObject = json_decode($response);

$datas = array();

$dataLines = 0;

if ($response == "false") { ?>
  <script>
      alert("Tabela Não Encontrada\nVerifique o Nome e Tente Novamente");
      window.location.href = "index.php";
  </script>
<?php }else{
  foreach ($datasObject as $key => $value) {
    array_push($datas, (array) $value); 
    $dataLines++;
  }
}

if ($dataLines < 1) { ?>
  <script>
      alert("Ops... Nada a Ser Mostrado Nesta Tabela");
      window.location.href = "index.php";
  </script>
<?php }

/*
foreach ($datas as $key => $value) {
  echo "<br>";
  var_dump($value);
}
*/

