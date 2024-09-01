<?php
class Hash {
    public static function make($string){
        $option = [
            'cost'=> 12
        ];
        $hashed = password_hash($string, PASSWORD_BCRYPT, $option);
        return $hashed;
    }

    public static function check($pwd, $password){
        if (password_verify($password,$pwd)){
            return true;
        } else {
            return false;
        }
    }

    public static function unique () {
        return self::make(uniqid());        
    }
}