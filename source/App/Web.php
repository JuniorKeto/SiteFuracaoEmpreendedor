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

    public function home()
    {
        echo $this->view->render("home");
    }

    public function about()
    {
        echo $this->view->render("about");
    }
    
    public function blog()
    {
        echo $this->view->render("blog");
    }

    public function contact()
    {
        echo $this->view->render("contact");
    }

    public function error($d)
    {
        echo $this->view->render("error/error", ["errcode" => $d["errcode"]]);
    }
}
