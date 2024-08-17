<?php


use APP\Core\Router;

class APP{
    public function run()
    {
        require "../routes/web.php";

        $path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        Router::route($_SERVER["REQUEST_METHOD"], $path);
    }
}