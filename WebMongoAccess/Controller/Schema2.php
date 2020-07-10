<?php
var_dump($_POST['name']);

echo "<br>";

$schema = "{ \"user_name\": \"" . $_POST['username'] . "\",\n";
$schema .= "\"schema\": { \n";

foreach ($_POST['name'] as $key => $value) {
    $schema .= "\"" . $_POST['name'][$key] .  "\": { \n";
    $schema .= "\"type\": " . "\"" . $_POST['type'][$key] . "\",\n";

    if ($_POST['require'][$key] == "true") {
        $schema .= "\"require\": " . "\"true\",\n";
    }
    if ($_POST['unique'][$key] == "true") {
        $schema .= "\"unique\": " . "\"true\",\n";
    }
    if ($_POST['select'][$key] == "false") {
        $schema .= "\"select\": " . "\"false\",\n";
    }

    $schema = trim($schema, ",\n");

    $schema .= "\n},";
}
$schema = trim($schema, ',');
$schema .= "}}";

echo nl2br($schema);

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
    CURLOPT_POSTFIELDS => $schema,
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
