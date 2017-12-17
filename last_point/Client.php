<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 17/12/2017
 * Time: 3:20 PM
 */

class Client{

    private $service;
    private $params = array();

    public function setParam($param, $value){
        $this->params[$param] = $value;
    }

    public function setService($service){
        $this->service = $service;
    }

    public function invoke($function){
        $client = new SoapClient($this->service);

        $response = $client->__soapCall($function, array($this->params));

        return $response;
    }


}