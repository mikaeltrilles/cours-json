<?php

namespace Mikaeltrilles\Json;

class Model
{
    private string $url;
    private string $response;
    private $curl;

    public function __construct()
    {
        $this->curl = curl_init();
    }

    private function setCurlOptions()
    {
        curl_setopt_array($this->curl, [
        CURLOPT_URL=>$this->url,
        CURLOPT_CUSTOMREQUEST=>'GET',
        CURLOPT_HTTPHEADER=>['Content-Type: application/json'],
        CURLOPT_RETURNTRANSFER=>true,
        ]);
    }

    private function execute()
    {
        $this->setCurlOptions();
        $this->response = curl_exec($this->curl);
        $results = json_decode($this->response);
        return ($results->results);
    }

    public function getFormations()
    {
        $this->url = 'https://api-v2.hub3e.com/v2/ecoles/130/formations';
        return $this->execute();
    }
}
