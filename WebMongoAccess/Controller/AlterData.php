<?php

$datas = array();
$username = $_POST["username"];
$id = $_POST["id"];

foreach ($_POST["column"] as $key => $value) {
    $datas = $datas + array($value => $_POST["data"][$key]);
}

$aJson = array( 
    "user_name" => $username,
    "id" => $id,
    "dados" => $datas
);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/alter",
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
      alert("Alterado na Tabela com Sucesso!");
      window.location.href = "../View/Select.php?table=<?= $username ?>";
  </script>
<?php }else { ?>
  <script>
      alert("Erro ao Alterar na Tabela");
      window.history.back();
  </script>
<?php }