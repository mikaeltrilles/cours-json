<?php

namespace Mikaeltrilles\Json\Entities;

use Mikaeltrilles\Json\Model;

class Sirene extends Model
{
    public function __construct()
    {
        $this->url = 'https://entreprise.data.gouv.fr/api/sirene/v3/etablissements/';
        parent::__construct();
    }

    public function getAll()
    {
        $results=parent::getAll();
        return $results->etablissements;
    }
}
