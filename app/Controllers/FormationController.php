<?php

namespace Mikaeltrilles\Json\Controllers;

use Mikaeltrilles\Json\Controller;

class FormationController extends Controller
{
    public function index()
    {
        $formations = $this->model->getFormations();
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
        $formation = $this->model->getFormationById($id);
        if ($formation === null) {
            $this->index();
        }
        $this->render('formation', [
                'formation' => $formation
            ]);
    }
}
