<?php

namespace Mikaeltrilles\Json;

class View
{
    public array $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
    }

    public function index()
    {
        foreach ($this->vars as $key => $value) {
            foreach ($value as $id => $formation) {
                echo $id . ' : ' . $formation . PHP_EOL;
            }
        }
    }

    public function formation()
    {
        foreach ($this->vars as $formation) {
            echo $formation->nom.' : '.$formation->description.PHP_EOL;
        }
    }
}
