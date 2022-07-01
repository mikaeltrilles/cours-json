<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Model as Model;
use Mikaeltrilles\Json\View as View;

class Controller
{
    private Model $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index()
    {
        $formations = $this->model->getFormations();
        $forma = [];
        foreach ($formations as $formation) {
            $forma[$formation->id] = $formation->nom;
        }
        $view = new View([
        'formations' => $forma
      ]);
        $view->index();
    }

    public function getFormation($id)
    {
        $formation = $this->model->getFormationById($id);
        $view = new View([
        'formation' => $formation
      ]);
        $view->formation();
    }
}
