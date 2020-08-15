<?php 
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$r = new Router(ROOT);

$r->namespace("Source\App");

$r->group(null);
$r->get("/", "Web:main");







$r->dispatch();


