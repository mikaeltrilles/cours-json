<?php
require('vendor/autoload.php');
use Mikaeltrilles\Json\Controller as Controller;

$hub = new Controller();
$hub->index();

$hub->getFormation(3539);
$hub->getFormation(3836);