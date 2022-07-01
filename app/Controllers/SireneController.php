<?php

namespace Mikaeltrilles\Json\Controllers;

use Mikaeltrilles\Json\Controller;
use Mikaeltrilles\Json\Entities\Sirene;

class SireneController extends Controller
{
    public function index()
    {
        $this->model = new Sirene();
        $results = $this->model->getAll();
        $this->render('sirene', [
      'sirene' => $results
    ]);
    }
}
