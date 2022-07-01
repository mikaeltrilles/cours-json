<?php

namespace Mikaeltrilles\Json;

class View
{
    private string $template;
    private array $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
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

    public function render($page)
    {
        require($this->getHead());
        require($this->getNav());
        require $this->template . '../' . $page . '.php';
        require($this->getFooter());
    }



    // public function index()
    // {
    //     require($this->getHead());
    //     require($this->getNav());

    //     foreach ($this->vars as $key => $value) {
    //         foreach ($value as $id => $formation) {
    //             echo "<a href='index.php?id=$id'>".$formation."</a><br>";
    //         }
    //     }

    //     require($this->getFooter());
    // }

    // public function formation()
    // {
    //     foreach ($this->vars as $formation) {
    //         echo $formation->nom.' : '.$formation->description.'<br>';
    //     }
    // }
}
