<?php

require_once "core/init.php";

$userInsert = DB::getInstance()->delete("register", array("E_mail", "=", "Venkat@gmail.com"));
