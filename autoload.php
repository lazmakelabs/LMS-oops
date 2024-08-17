<?php

foreach(glob("../config/*.php") as $filename){
    require $filename;
}
foreach(glob("../core/*.php") as $filename){
    require $filename;
}


$app = new APP;
$app->run();