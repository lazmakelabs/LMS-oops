<?php

use APP\Core\Router;

Router::get('/hello', function(){
    echo "Welcome From web.php";
});