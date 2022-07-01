<?php

namespace Mikaeltrilles\Json;

class View
{
    private string $template;
    private array $vars;

    public function __construct()
    {
        $this->template = dirname(__FILE__) . '/../views/template/';
    }

    public function getHead()
    {
        return $this->template . 'head.php';
    }

    public function getFooter()
    {
        return $this->template . 'footer.php';
    }

    public function getNav()
    {
        return $this->template . 'nav.php';
    }

    public function render(string $page, array $vars):void
    {
        extract($vars);
        require($this->getHead());
        require($this->getNav());
        require $this->template . '../' . $page . '.php';
        require($this->getFooter());
    }
}
