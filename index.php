<?php 
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$r = new Router(ROOT);

$r->namespace("Source\App");

$r->group(null);
$r->get("/", "Web:home");
$r->get("/about", "Web:about");
$r->get("/blog", "Web:blog");
$r->get("/contact", "Web:contact");

/**
 * 
 * ERRORS
 * 
 */

$r->group("ooops");
$r->get("/{errcode}", "Web:error");


$r->dispatch();

if ($r->error()) {
    $r->redirect("/ooops/{$r->error()}");
}
