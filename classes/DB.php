<?php
class DB {
    private static $_instance = null;
    private $_pdo,
            $_query, 
            $_error = false,
            $_results,
            $_count = 0; // Use _count to match private visibility

    private function __construct(){
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'),
                                  Config::get('mysql/username'), Config::get('mysql/password'));
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Optionally set error mode
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function query($sql, $params = array()) {
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if(count($params)) {
                foreach($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
            if ($this->_query->execute()) {
                echo 'Success';
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
                echo 'Query Failed';
            }
        }
    }
}
