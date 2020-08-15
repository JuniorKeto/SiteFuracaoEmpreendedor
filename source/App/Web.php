<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../Views/", "php");
    }

    public function main()
    {
        echo $this->view->render("index");
    }
}
