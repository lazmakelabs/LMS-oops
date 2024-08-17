<?php

use App\Controllers\HomeController;
use App\Core\Router;

Router::get('/hello', function(){
    echo "Welcome From web.php";
});

Router::get('/', [new HomeController, "index"]);