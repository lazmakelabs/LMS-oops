<?php
class User{
    private $_db;
    private $_data;
    private $_sessionName;
    private $_cookieName;
    private $_isLoggedIn;

    public function __construct($user=null) {
        $this->_db= DB::getInstance();

        $this->_sessionName = Config::get('session/session_name');
        $this->_cookieName = Config::get('remember/cookie_name');

        if(!$user) {
            if(Session::exists($this->_sessionName)){
                $user = Session::get($this->_sessionName);
                
                if($this->find($user)){
                    $this->_isLoggedIn = true;
                } else {

                }
            }
        } else {
            $this->find($user);
        }
    }

    public function create($fields = [])
    {
        if(!$this->_db->insert('users', $fields)){
            throw new Exception("There was a problem creating an account");
        }
    }

    public function find($user = null){
        if($user) {
            $field = (is_numeric($user)) ? 'reg_Id' : 'Email';
            $data = $this->_db->get('users', array($field, '=', $user));

            if($data->count()){
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login($Email = null, $Password = null, $remember){
        $user = $this->find($Email);
        
        if($user){
           if(Hash::check($this->data()->Password, $Password)) {
            Session::put($this->_sessionName, $this->data()->reg_Id);

            if($remember){
                $hash = Hash::unique();
                $hashCheck = $this->_db->get('user_session', array('user_id', '=', $this->data()->id));

                if(!$hashCheck->count()){
                    echo "<p>Inside hash check</p>";
                    $this->_db->insert('user_session',array(
                        'user_id' => $this->data()->id,
                        'hash' => $hash
                    ));
                } else {
                    $hash = $hashCheck->first()->hash;
                }

                Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
            }

            return true;
           }
        }
        return false;
    }

    public function logout(){
        Session::delete($this->_sessionName);
    }

    public function data() {
        return $this->_data;
    }

    public function isLoggedIn(){
       return $this->_isLoggedIn;
    }
} 