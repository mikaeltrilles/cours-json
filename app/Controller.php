<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Model as Model;

class Controller
{
    private Model $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
      var_dump($this->model->getFormations());
    }
}
