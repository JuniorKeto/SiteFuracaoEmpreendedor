<?php
define("ROOT", "http://192.168.2.105/SiteFuracaoEmpreendedor");

define("CSS",  "public/css/");
define("JS",  "public/js/");
define("IMG", "public/images/"); 
define("FONTS",  "public/fonts/");
define("ICONS",  "public/icons/");
define("ERROR",  "public/error/");



/**
 * @param string|null $uri
 * @return string
 *       
 */

function url(string $uri = null): string {
    if($uri){
        return ROOT . "/{$uri}";
    }

    return ROOT;
}