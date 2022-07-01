<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Controllers\FormationController;

class Router
{
  public static function Dispatch()
  {
    $controller = new FormationController();   
    if(isset($_GET['id'])) {
      $controller->getFormation((int)$_GET['id']);}
    else {
      $controller->index();
    }
  }
}
