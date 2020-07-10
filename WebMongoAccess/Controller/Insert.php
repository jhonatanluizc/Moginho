<?php

$datas = array();

foreach ($_POST["column"] as $key => $value) {
    $datas = $datas + array($value => $_POST["data"][$key]);
}

$aJson = array( 
    "user_name" => $_POST["username"],
    "dados" => $datas
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/create",
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

if ($response == "true") { ?>
  <script>
      alert("Inserido na Tabela com Sucesso!");
      window.location.href = "../View/index.php";
  </script>
<?php }else { ?>
  <script>
      alert("Erro ao Cadastrar na Tabela\nVerifique o Nome da Tabela\nVerifique os Campos da Tabela");
      window.history.back();
  </script>
<?php }
