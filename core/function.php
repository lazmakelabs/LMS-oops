<?php

function redirect($path){
    header('Location: '.APP_URL.'/'.$path);
    header('Location: http://localhost/LMS%20oops/miscellaneous/404');
    die();
}