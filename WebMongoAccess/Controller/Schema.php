<?php

$type = $_POST['type'];
$require = $_POST['require'];
$unique = $_POST['unique'];
$select = $_POST['select'];

$struct = array();

foreach ($_POST['name'] as $key => $value) {

    $config = array("type" => $type[$key]);

    if ($require[$key] == "true") {
        $config += array("require" => true);
    }
    if ($unique[$key] == "true") {
        $config += array("unique" => true);
    }
    if ($select[$key] == "false") {
        $config += array("select" => false);
    }

    $struct += array($value => $config);
}

$aJson = array(
    "user_name" => $_POST["username"],
    "schema" => $struct
);


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
    CURLOPT_POSTFIELDS => json_encode($aJson),
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
    ),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response == "true") { ?>
        <script>
            alert("Tabela Cadastrada");
            window.location.href = "../View/index.php";
        </script>
    <?php }else { ?>
        <script>
            alert("Erro ao Cadastrar a Tabela\nVerifique o Nome da Tabela");
            window.history.back();
        </script>
<?php }

