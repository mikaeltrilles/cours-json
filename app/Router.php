<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Controllers\FormationController;
use Mikaeltrilles\Json\Controllers\SireneController;

class Router
{
  public static function Dispatch()
  {
    if(isset($_GET['id'])) {
      $controller = new FormationController();   
      $controller->getFormation((int)$_GET['id']);}
    else {
      $controller = new SireneController();
      $controller->index();
    }
  }
}
