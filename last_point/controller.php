<?php

require 'Client.php';

$service = $_POST["service"];
$function = $_POST["function"];

$param = $_POST["param"];
$value = $_POST["value"];

$client = new Client();
$client->setService($service);
$client->setParam($param, $value);

$result = $client->invoke($function);

echo $result->GetWhoISResult;