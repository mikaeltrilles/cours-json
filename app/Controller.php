<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Model as Model;
use Mikaeltrilles\Json\View as View;

class Controller
{
    protected Model $model;
    private View $view;

    public function __construct()
    {

        $this->view = new View();
    }

    protected function render(string $page, array $vars):void
    {
        $this->view->render($page, $vars);
    }
}
