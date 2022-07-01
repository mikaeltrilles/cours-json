<?php

namespace Mikaeltrilles\Json;

class Model
{
    protected string $url;
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
        // echo curl_error($this->curl);
        // echo curl_errno($this->curl);
        return ($results);
    }

    public function getAll()
    {
        return $this->execute();
    }

    public function getById($id)
    {
        $results = $this->getAll();
        foreach ($results as $result) {
            if ((int)$result->id === (int)$id) {
                return $result;
            }
        }
    }
}
