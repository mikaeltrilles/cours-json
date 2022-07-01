<?php

namespace Mikaeltrilles\Json\Controllers;

use Mikaeltrilles\Json\Controller;
use Mikaeltrilles\Json\Entities\Formation;

class FormationController extends Controller
{
    public function index()
    {
        $this->model = new Formation();
        $formations = $this->model->getAll();
        $forma = [];
        foreach ($formations as $formation) {
            $forma[$formation->id] = $formation->nom;
        }
        $this->render('index', [
            'formations' => $forma
        ]);
    }

    public function getFormation($id)
    {
        $this->model = new Formation();
        $formation = $this->model->getById($id);
        if ($formation === null) {
            $this->index();
        }
        $this->render('formation', [
                'formation' => $formation
            ]);
    }

    public function all()
    {
        $this->model = new Formation();
        $formations = $this->model->getAll();

        $this->render('all', [
            'formations' => $formations
        ]);
    }
}
