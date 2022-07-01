<?php

namespace Mikaeltrilles\Json;

use Mikaeltrilles\Json\Controller as Controller;

class Router
{
  public static function Dispatch()
  {
    $controller = new Controller();   
    if(isset($_GET['id'])) {
      $controller->getFormation((int)$_GET['id']);}
    else {
      $controller->index();
    }
  }
}
