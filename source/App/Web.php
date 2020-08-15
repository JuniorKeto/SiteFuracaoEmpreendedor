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
        echo $this->view->render("principal");
    }

    public function error($d)
    {
        echo $this->view->render("error/error", ["errcode" => $d["errcode"]]);
    }
}
