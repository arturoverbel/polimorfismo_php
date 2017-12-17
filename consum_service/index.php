<?php

$client = new SoapClient("http://www.webservicex.net/whois.asmx?WSDL");

var_dump($client->__getFunctions());
echo "<hr>";
var_dump($client->__getTypes());

$params = array(
    "HostName" => "micaminomaster.com.co"
);

$response = $client->__soapCall("GetWhoIS", array($params));

echo "<br>";
echo "<br>";
var_dump($response);
