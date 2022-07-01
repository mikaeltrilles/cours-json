<?php

namespace Mikaeltrilles\Json\Entities;

use Mikaeltrilles\Json\Model;

class Formation extends Model
{
    public function __construct()
    {
        $this->url = 'https://api-v2.hub3e.com/v2/ecoles/130/formations';
        parent::__construct();
    }

    public function getAll()
    {
        $results = parent::getAll();
        return $results->results;
    }
}
