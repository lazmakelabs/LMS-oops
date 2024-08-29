<?php
class Hash {
    public static function make($string){
        $option = [
            'cost'=> 12
        ];
        $hashed = password_hash($string, PASSWORD_BCRYPT, $option);
        return $hashed;
    }

    public static function salt() {

    }

    public static function unique() {
        
    }
}