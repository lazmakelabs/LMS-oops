<?php
class User{
    private $_db;
    private $_data;
    private $_sessionName;

    public function __construct($user=null) {
        $this->_db= DB::getInstance();

        $this->_sessionName = Config::get('session/session_name');

        if(!$user) {
            
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

    public function login($Email = null, $Password = null){
        $user = $this->find($Email);
        if($user){
           if(Hash::check($this->data()->Password, $Password)) {
            Session::put($this->_sessionName, $this->data()->reg_Id);
            return true;
           }
        }

        return false;
    }

    private function data() {
        return $this->_data;
    }
}