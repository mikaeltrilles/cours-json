<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Controllers\FormationController;
use Mikaeltrilles\Json\Controllers\SireneController;

class Router
{
    private static $page;

    public static function Dispatch()
    {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
        case 'formation':
          $controller = new FormationController();
          break;
        case 'sirene':
          $controller = new SireneController();
          break;
        default:
          $controller = new FormationController();
          break;
            }
        } else {
            $controller = new FormationController();
        }
        if (isset($_GET['id'])) {
            $controller->getFormation((int)$_GET['id']);
        } else {
            $controller->index();
        }
    }
}
