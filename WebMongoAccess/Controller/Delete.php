<?php
$username = $_GET["username"];
$id = $_GET["id"];

$aJson = array( 
  "user_name" => $username,
  "id" => $id
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost:3333/delete",
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
      alert("Item deletado com Sucesso!");
      window.location.href = "../View/Select.php?table=<?= $username ?>";
  </script>
<?php }else { ?>
  <script>
      alert("Não foi Possível Deletar o Item");
      window.location.href = "../View/Select.php?table=<?= $username ?>";
  </script>
<?php }
